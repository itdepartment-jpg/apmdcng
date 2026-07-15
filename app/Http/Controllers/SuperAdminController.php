<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Hash;

class SuperAdminController extends Controller
{


    public function create()
    {
        return inertia('Auth/SuperRegister');
    }

    public function store(Request $request)
    {

        dd($request->all());
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|confirmed|min:8',
            'is_active' => 'boolean',
            'permissions' => 'array',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,

            'password' => Hash::make($request->password),
            'is_active' => $request->is_active ?? true,
            'email_verified_at' => now(), // Auto-verify super admin
        ]);

        // Handle super-admin role and permissions
        $role = Role::firstOrCreate(['name' => 'super-admin']);

        if ($request->has('permissions')) {
            foreach ($request->permissions as $permissionName) {
                Permission::firstOrCreate(['name' => $permissionName]);
            }
            $role->syncPermissions($request->permissions);
        }

        $user->assignRole($role);

        return redirect()->route('dashboard')
            ->with('success', 'Super Admin created successfully');
    }
}
