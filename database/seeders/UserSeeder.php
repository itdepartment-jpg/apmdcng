<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        // Create admin user
        $admin = User::create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'),
            'role' => 'admin',
            'is_active' => true
        ]);

        // Create editor user
        $editor = User::create([
            'name' => 'Content Editor',
            'email' => 'editor@example.com',
            'password' => Hash::make('password'),
            'role' => 'editor',
            'is_active' => true
        ]);

        // Create permissions
        $editLeadership = Permission::create([
            'name' => 'edit_leadership',
            'description' => 'Can edit leadership team content'
        ]);

        // Assign permission to editor
        $editor->permissions()->attach($editLeadership);
    }
}
