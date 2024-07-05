<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder {
    /**
     * Run the database seeds.
     */
    public function run(): void {
        $role_admin = Role::create(['name' => 'admin']);
        $role_editor = Role::create(['name' => 'editor']);

        Permission::create(['name' => 'create role']);
        Permission::create(['name' => 'read role']);
        Permission::create(['name' => 'update role']);
        Permission::create(['name' => 'delete role']);

        Permission::create(['name' => 'create lesson']);
        Permission::create(['name' => 'read lesson']);
        Permission::create(['name' => 'update lesson']);
        Permission::create(['name' => 'delete lesson']);

        Permission::create(['name' => 'create category']);
        Permission::create(['name' => 'read category']);
        Permission::create(['name' => 'update category']);
        Permission::create(['name' => 'delete category']);

        $role_admin->givePermissionTo(Permission::all());

        $role_editor->givePermissionTo([
            'create lesson',
            'read lesson',
            'update lesson',
            'delete lesson',
            'create category',
            'read category',
            'update category',
            'delete category',
        ]);
    }
}
