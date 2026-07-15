<?php

// app/Http/Controllers/Admin/UserController.php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\Rules;
use Inertia\Inertia;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $users = User::with('roles')
            ->orderBy('name')
            ->paginate(10)
            ->through(function ($user) {
                return [
                    'id' => $user->id,
                    'name' => $user->name,
                    'email' => $user->email,
                    'is_active' => $user->is_active,
                    'created_at' => $user->created_at,
                    'roles' => $user->roles->map(fn ($role) => [
                        'name' => $role->name,
                    ]),
                ];
            });

        return Inertia::render('Admin/Users/Index', [
            'users' => $users,
            'roles' => Role::all(),
            'can' => [
                'create' => auth()->user()->can('create users'),
                'edit' => auth()->user()->can('edit users'),
                'delete' => auth()->user()->can('delete users'),
                'impersonate' => auth()->user()->can('impersonate users'),
            ],
            'filters' => $request->only(['search', 'role', 'status']),
        ]);

        //    return Inertia::render('Admin/Users/Index', [
        //        'users' => $users,
        // //        'can' => [
        // //            'create' => auth()->user()->can('create users'),
        // //            'edit' => auth()->user()->can('edit users'),
        // //            'delete' => auth()->user()->can('delete users'),
        // //        ],
        //    ]);
    }

    public function indexProfile()
    {
        // Get only the authenticated user's data
        $user = auth()->user()->load('roles');

        return Inertia::render('Admin/Users/Profile', [
            'user' => [
                'id' => $user->id,
                'name' => $user->name,
                'email' => $user->email,
                'is_active' => $user->is_active,
                'created_at' => $user->created_at,
                'roles' => $user->roles->map(fn ($role) => [
                    'name' => $role->name,
                ]),
            ],
            'can' => [
                'update' => true, // Always true since it's their own profile
            ],
        ]);
    }

    public function update_profile(Request $request)
    {
        $user = $request->user();

        $user->name = $request->name;
        $user->email = $request->email;

        // Only update password if provided
        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }

        $user->save();

        return back()->with('success', 'Profile updated successfully');
    }

    public function store2(Request $request)
    {
        // Uncomment if you have authorization setup
        // $this->authorize('create', User::class);

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                'unique:users',
            ],
            'password' => ['required', Rules\Password::defaults()],
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'roles' => ['required', 'array'],
            'roles.*' => [
                'exists:roles,name',
                function ($attribute, $value, $fail) {
                    if ($value === 'super-admin' && ! auth()->user()->hasRole('super-admin')) {
                        $fail('You cannot assign super admin role');
                    }
                },
            ],
        ]);

        DB::beginTransaction();
        try {
            // Handle avatar upload
            $avatarPath = null;
            if ($request->hasFile('avatar')) {
                $avatarPath = $request->file('avatar')->store('avatars', 'public');
            }

            $user = User::create([
                'name' => $validated['name'],
                'email' => $validated['email'],
                'password' => Hash::make($validated['password']),
                'avatar' => $avatarPath,
                'is_active' => true,
                //                'email_verified_at' => config('app.skip_email_verification') ? now() : null,
                'email_verified_at' => Carbon::now(),
            ]);

            // Assign roles with super admin check
            $roles = $validated['roles'];
            if (! in_array('super-admin', $roles) || auth()->user()->hasRole('super-admin')) {
                $user->syncRoles($roles);
            }

            // Send email verification if not skipped
            if (empty($user->email_verified_at)) {
                $user->sendEmailVerificationNotification();
            }

            DB::commit();

            return redirect()->route('users.index')
                ->with('success', 'User created successfully');
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error('User creation failed: '.$e->getMessage());

            return back()->withInput()
                ->with('error', 'Failed to create user. Please try again.');
        }
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => ['required', Rules\Password::defaults()],
            'roles' => 'required|array',
            'roles.*' => [
                'exists:roles,name',
                $this->superAdminRoleRule(),
            ],
        ]);

        $avatarPath = null;
        if ($request->hasFile('avatar')) {
            $avatarPath = $request->file('avatar')->store('avatars');
        }

        $user = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
            'is_active' => true,
            'email_verified_at' => Carbon::now(),
        ]);

        $user->syncRoles($validated['roles']);

        return redirect()->route('admin.users.index')
            ->with('success', 'User created successfully');
    }

    public function update(Request $request, User $user)
    {
        $this->guardSuperAdminMutation($user);

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,'.$user->id,
            'password' => ['nullable', Rules\Password::defaults()],
            'roles' => 'required|array',
            'roles.*' => [
                'exists:roles,name',
                $this->superAdminRoleRule(),
            ],
        ]);

        $user->name = $validated['name'];
        $user->email = $validated['email'];

        if ($request->filled('password')) {
            $user->password = Hash::make($validated['password']);
        }

        $user->save();

        $user->syncRoles($validated['roles']);

        return redirect()->route('admin.users.index')->with('success', 'User updated successfully.');
    }

    public function create()
    {
        return Inertia::render('Admin/Users/Create', [
            'roles' => Role::all(),
            'permissions' => Permission::all(),
            'can' => [
                'create' => auth()->user()->can('create users'),
            ],
        ]);
    }

    public function toggleStatus(User $user)
    {
        $this->guardSuperAdminMutation($user);

        if ($user->is(auth()->user())) {
            abort(403, 'You cannot change your own active status.');
        }

        $user->update([
            'is_active' => ! $user->is_active,
        ]);

        return back();
    }

    public function destroy(User $user)
    {
        $this->guardSuperAdminMutation($user);

        if ($user->is(auth()->user())) {
            abort(403, 'You cannot delete your own account from user management.');
        }

        $user->delete();

        return redirect()->route('admin.users.index');
    }

    private function guardSuperAdminMutation(User $user): void
    {
        if ($user->hasRole('super-admin') && ! auth()->user()?->hasRole('super-admin')) {
            abort(403, 'Only a super admin can modify another super admin.');
        }
    }

    private function superAdminRoleRule(): \Closure
    {
        return function (string $attribute, string $value, \Closure $fail): void {
            if ($value === 'super-admin' && ! auth()->user()?->hasRole('super-admin')) {
                $fail('Only a super admin can assign the super admin role.');
            }
        };
    }
}
