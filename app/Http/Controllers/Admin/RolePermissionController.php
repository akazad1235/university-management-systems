<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolePermissionController extends Controller
{
    public function index(){
        $roles =  Role::get();
        return view('backend.pages.permission.role_index', ['roles' => $roles]);
    }
    public function create(){
        $permissions =  Permission::get();
        return view('backend.pages.permission.role_create', ['permissions' => $permissions]);
    }
    public function store(Request $request){
       // return  $request->all();
       $role = Role::create([
            'name' => $request->name
        ]);
        $permissions = $request->permissions;
        $role->syncPermissions($permissions);

        return 'success';
    }
}
