<?php

namespace App\Http\Controllers\Permission;

use App\Http\Controllers\Controller;
use App\Models\TblProject;
use App\Models\User;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;


class RolePermissionController extends Controller
{
    public function index(){
        //       $user =  User::find(8);
        //       return $user->givePermissionTo('admin-create');
        $roles =  Role::with('permissions:id,name')->get();
        return view('backend.pages.permission.role_index', ['roles' => $roles]);
    }
    public function create(){

        $groupByPermissions =  User::getPermissionGroupBy();

        $permissions =  Permission::get();
        return view('backend.pages.permission.role_create', ['permissions' => $permissions, 'groupByPermissions' => $groupByPermissions]);
    }
    public function store(Request $request){

        $role = Role::create([
            'name' => $request->name,
            'group_name' => $request->group_name
        ]);
        $permissions = $request->permissions;
        $role->syncPermissions($permissions);

        return 'success';
    }
    public function edit($id){
        $role =   Role::findById(base64_decode($id));
        $groupByPermissions =  User::getPermissionGroupBy();
        $permissions =  Permission::get();
        return view('backend.pages.permission.role_edit', ['role' => $role, 'groupByPermissions' => $groupByPermissions, 'permissions' => $permissions]);

    }
    public function update(Request $request, string $id){
        $role = Role::findById(base64_decode($id));
        $role->update([
            'name' => $request->name,
            'group_name' => $request->group_name
        ]);

        $permissions = $request->permissions;
        $role->syncPermissions($permissions);
        return 'success';
    }
}
