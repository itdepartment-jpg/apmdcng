<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->call(RolesAndPermissionsSeeder::class);

        $adminRole = Role::firstOrCreate(['name' => 'admin']);
        $superAdminRole = Role::firstOrCreate(['name' => 'super-admin']);

        $admin = User::withTrashed()->updateOrCreate(
            ['email' => 'apmdcapmdc68@gmail.com'],
            [
                'name' => 'APMDC Admin',
                'password' => Hash::make('AdminAPMDC123'),
                'is_active' => true,
                'email_verified_at' => now(),
            ]
        );

        if ($admin->trashed()) {
            $admin->restore();
        }

        $admin->syncRoles([$adminRole, $superAdminRole]);
    }
}
