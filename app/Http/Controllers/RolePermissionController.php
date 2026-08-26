<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolePermissionController extends Controller
{
    /**
     * Display Roles & Permissions.
     */
    public function index()
    {
        return Inertia::render('Admin/Roles/Index', [
            'roles' => Role::with('permissions')
            ->orderBy('name')
            ->get(),

            'permissions' => collect(config('rbac.permissions', []))
                ->map(fn ($permission, $index) => [
                    'id' => $index + 1,
                    'name' => $permission,
                ])
                ->values(),

            'availablePermissions' => config('rbac.permissions', []),
        ]);
    }

    /**
     * Store a new role and assign permissions.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'role_name' => [
                'required',
                'string',
                'max:255',
                'unique:roles,name',
                'not_in:super-admin',
            ],

            'permissions' => [
                'nullable',
                'array',
            ],

            'permissions.*' => [
                'string',
                'max:255',
                'in:' . implode(',', config('rbac.permissions', [])),
            ],
        ]);

        $role = Role::create([
            'name' => $validated['role_name'],
            'guard_name' => 'web',
        ]);

        $permissionModels = collect($validated['permissions'] ?? [])
            ->map(function ($permissionName) {
                return Permission::firstOrCreate([
                    'name' => $permissionName,
                    'guard_name' => 'web',
                ]);
            });

        $role->syncPermissions($permissionModels);

        return redirect()
            ->route('admin.roles-permissions.index')
            ->with('success', 'Role and permissions created successfully.');
    }

    /**
 * Update an existing role and its permissions.
 */
public function update(Request $request, Role $role)
{
    // Super Admin is a protected system role.
    if ($role->name === 'super-admin') {
        abort(403, 'The super-admin role cannot be modified.');
    }

    $validated = $request->validate([
        'role_name' => [
            'required',
            'string',
            'max:255',
            'unique:roles,name,' . $role->id,
            'not_in:super-admin',
        ],

        'permissions' => [
            'nullable',
            'array',
        ],

        'permissions.*' => [
            'string',
            'max:255',
            'in:' . implode(',', config('rbac.permissions', [])),
        ],
    ]);

    $role->update([
        'name' => $validated['role_name'],
    ]);

    $permissionModels = collect($validated['permissions'] ?? [])
        ->map(function ($permissionName) {
            return Permission::firstOrCreate([
                'name' => $permissionName,
                'guard_name' => 'web',
            ]);
        });

    $role->syncPermissions($permissionModels);

    return redirect()
        ->route('roles-permissions.index')
        ->with('success', 'Role and permissions updated successfully.');
}

/**
 * Delete a role.
 */
public function destroy(Role $role)
{
    // Protect system roles.
    if (in_array($role->name, ['super-admin', 'admin'])) {
        abort(403, 'This system role cannot be deleted.');
    }

    // Prevent deletion if users are assigned to this role.
    if ($role->users()->exists()) {
        return redirect()
            ->back()
            ->with('error', 'This role cannot be deleted because it is assigned to one or more users.');
    }

    // Remove role permissions before deleting the role.
    $role->syncPermissions([]);

    $role->delete();

    return redirect()
        ->route('admin.roles-permissions.index')
        ->with('success', 'Role deleted successfully.');
}
}