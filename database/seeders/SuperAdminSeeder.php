<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class SuperAdminSeeder extends Seeder
{
    public function run(): void
    {
        $this->call(RolesAndPermissionsSeeder::class);

        $superAdminRole = Role::firstOrCreate(['name' => 'super-admin']);

        $superAdmin = User::withTrashed()->updateOrCreate(
            ['email' => 'superadmin@example.com'],
            [
                'name' => 'Super Admin',
                'password' => Hash::make('admin123'),
                'is_active' => true,
                'email_verified_at' => now(),
            ]
        );

        if ($superAdmin->trashed()) {
            $superAdmin->restore();
        }

        $superAdmin->assignRole($superAdminRole);
    }
}
