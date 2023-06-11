<?php

// php artisan vendor:publish --tag=mangosteen-seeders --force
// php artisan db:seed --class RoleSeeder

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Mangosteen\Models\Entities\Role;

class RoleSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        $roles = [
            [
                'name' => 'Super Admin',
                'slug' => 'super admin',
            ],
            [
                'name' => 'Admin',
                'slug' => 'admin',
            ],
            [
                'name' => 'User',
                'slug' => 'user',
            ],
        ];

        foreach ($roles as $role) {
            Role::create($role);
        }
    }
}
