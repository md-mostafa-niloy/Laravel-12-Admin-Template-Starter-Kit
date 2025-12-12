<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            // User
            ['name' => 'view user', 'group_name' => 'user'],
            ['name' => 'add user', 'group_name' => 'user'],
            ['name' => 'edit user', 'group_name' => 'user'],
            ['name' => 'delete user', 'group_name' => 'user'],

            // Roles
            ['name' => 'view role', 'group_name' => 'roles'],
            ['name' => 'add role', 'group_name' => 'roles'],
            ['name' => 'edit role', 'group_name' => 'roles'],
            ['name' => 'delete role', 'group_name' => 'roles'],
        ];

        foreach ($permissions as $permission) {
            \App\Models\Permission::create($permission);
        }
    }
}
