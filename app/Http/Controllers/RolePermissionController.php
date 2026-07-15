<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolePermissionController extends Controller
{
    public function index()
    {
        return Inertia::render('Admin/Roles/Index', [
            'roles' => Role::all(),
            'permissions' => Permission::all(),
            'availablePermissions' => config('rbac.permissions', []),
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'role_name' => 'required|string|max:255|not_in:super-admin',
            'permissions' => 'array',
            'permissions.*' => 'string|max:255|in:'.implode(',', config('rbac.permissions', [])),
        ]);

        $role = Role::firstOrCreate(['name' => $validated['role_name']]);

        $permissionModels = collect($validated['permissions'] ?? [])
            ->map(fn ($name) => Permission::firstOrCreate(['name' => $name]));

        $role->syncPermissions($permissionModels);

        return redirect()->back()->with('success', 'Role and permissions saved successfully.');
    }
}
