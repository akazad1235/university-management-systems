<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Collection;

class RolePermissionController extends Controller
{
    public function index(){
//       $user =  User::find(8);
//       return $user->givePermissionTo('admin-create');
        $roles =  Role::get();
        return view('backend.pages.permission.role_index', ['roles' => $roles]);
    }
    public function create(){

        $groupByPermissions =  User::getPermissionGroupBy();

        $permissions =  Permission::get();
        return view('backend.pages.permission.role_create', ['permissions' => $permissions, 'groupByPermissions' => $groupByPermissions]);
    }
    public function store(Request $request){
       // return  $request->all();
       $role = Role::create([
            'name' => $request->name,
           'group_name' => $request->group_name
        ]);
        $permissions = $request->permissions;
        $role->syncPermissions($permissions);

        return 'success';
    }
}
