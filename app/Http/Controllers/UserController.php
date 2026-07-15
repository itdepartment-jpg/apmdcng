<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Inertia\Inertia;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{



    /**
     * Display a listing of users.
     */
    //    public function indexEvent(Request $request)
    //    {
    //        Event::defer(function(){
    //            $user = User::create(['name'=>'Victoria']);
    //            $user->post()->create(['title'=>'Mr first post']);
    //        });
    //    }
    public function index(Request $request)
    {
        $this->authorize('viewAny', User::class);

        return Inertia::render('Users/Index', [
            'users' => User::query()
                ->when($request->input('search'), function ($query, $search) {
                    $query->where('name', 'like', "%{$search}%")
                        ->orWhere('email', 'like', "%{$search}%");
                })
                ->with('roles')
                ->latest()
                ->paginate(10)
                ->withQueryString(),
            'filters' => $request->only(['search']),
            'can' => [
                'create' => $request->user()->can('create', User::class),
                'edit' => $request->user()->can('update', User::class),
            ]
        ]);
    }

    /**
     * Show the form for creating a new user.
     */
    public function create()
    {
        $this->authorize('create', User::class);

        return Inertia::render('Users/Create', [
            'roles' => Role::all()->pluck('name'),
        ]);
    }

    /**
     * Store a newly created user.
     */
    public function store(Request $request)
    {

        dd($request->all());
        return;
        $this->authorize('create', User::class);

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => ['required', Rules\Password::defaults()],
            'roles' => 'required|array',
            'roles.*' => 'exists:roles,name',
        ]);

        // $avatarPath = null;
        // if ($request->hasFile('avatar')) {
        //     $avatarPath = $request->file('avatar')->store('avatars');
        // }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'avatar' => $avatarPath,

            'is_active' => true,
        ]);

        $user->syncRoles($request->roles);

        return redirect()->route('users.index')->with('success', 'User created successfully.');
    }

    /**
     * Show the form for editing the user.
     */
    public function edit(User $user)
    {
        $this->authorize('update', $user);

        return Inertia::render('Users/Edit', [
            'user' => $user->load('roles'),
            'roles' => Role::all()->pluck('name'),
        ]);
    }

    /**
     * Update the specified user.
     */
    public function update(Request $request, User $user)
    {

        dd($request->all());

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
            'password' => ['nullable', Rules\Password::defaults()],
            'is_active' => 'boolean',
            'roles' => 'required|array',
            'roles.*' => 'exists:roles,name',
        ]);

        if ($request->hasFile('avatar')) {
            // Delete old avatar if exists
            if ($user->avatar) {
                Storage::delete($user->avatar);
            }
            $user->avatar = $request->file('avatar')->store('avatars');
        }

        $user->name = $request->name;
        $user->email = $request->email;
        $user->is_active = $request->is_active;

        if ($request->password) {
            $user->password = Hash::make($request->password);
        }

        $user->save();
        $user->syncRoles($request->roles);

        return redirect()->route('users.index')->with('success', 'User updated successfully.');
    }

    public function profileupdate(Request $request, User $user)
    {
        //        $this->authorize('update', $user);

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
            'password' => ['nullable', Rules\Password::defaults()],
        ]);

        $user->name = $request->name;
        $user->email = $request->email;

        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }

        $user->save();

        return redirect()->route('admin.profile.index')->with('success', 'Profile updated successfully.');
    }

    /**
     * Remove the specified user.
     */
    public function destroy(User $user)
    {
        // $this->authorize('delete', $user);

        // Prevent self-deletion
        if (auth()->id() === $user->id) {
            return redirect()->back()->with('error', 'You cannot delete your own account.');
        }



        $user->delete();

        return redirect()->route('users.index')->with('success', 'User deleted successfully.');
    }
}
