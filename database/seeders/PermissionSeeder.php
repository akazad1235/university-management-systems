<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $superAdmin = Role::create(['name' => 'super-admin']);
        Role::create(['name' => 'admin']);
        Role::create(['name' => 'university']);
        Role::create(['name' => 'user']);

        $permissions = [
            //role
            'role-create',
            'role-view',
            'role-edit',
            'role-delete',

            //admin
            'admin-create',
            'admin-view',
            'admin-edit',
            'admin-delete',
            'admin-approve',

            //university
            'university-create',
            'university-view',
            'university-edit',
            'university-delete',
        ];
        for ($i =0 ; $i<count($permissions); $i++){
            $permission = Permission::create(['name' => $permissions[$i]]);
            $superAdmin->givePermissionTo($permission);
            $permission ->assignRole($superAdmin);
        }
    }
}
