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
            [
                'group_name' => 'dashboard',
                'permissions' => [
                    'dashboard.view',
                    'dashboard.edit'
                ],
            ],
            [
                'group_name' => 'roles',
                'permissions' => [
                    'role-create',
                    'role-view',
                    'role-edit',
                    'role-delete',
                ],
            ],
            [
                'group_name' => 'admin',
                'permissions' => [
                    'admin-create',
                    'admin-view',
                    'admin-edit',
                    'admin-delete',
                    'admin-approve',
                ],
            ],
            [
                'group_name' => 'service',
                'permissions' => [
                    'service-create',
                    'service-view',
                    'service-edit',
                    'service-delete',
                    'service-approve',
                ],
            ],

        ];
        for ($i=0; $i < count($permissions); $i++) {
            $permissionGroup = $permissions[$i]['group_name'];
            for ($j=0; $j < count($permissions[$i]['permissions']); $j++) {
                $permission = Permission::create(
                    [
                        'name' => $permissions[$i]['permissions'][$j],
                        'group_name' => $permissionGroup
                    ]
                );
                $superAdmin->givePermissionTo($permission);
                $permission ->assignRole($superAdmin);
            }
        }
    }
}
