<?php

namespace App\Http\Controllers\Permission;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Permission;

class PermissionController extends Controller
{
    public function index(){
       $permissions = Permission::get()->groupBy('group_name'); //group wise fetch data all permission
        return view('backend.pages.permission.permission_index', ['permissions' => $permissions]);
    }
    public function create(){
        return view('backend.pages.permission.permission_create');
    }
    public function store(Request $request){
        //return count($request->permission);
        for ($i=0; $i<count($request->permission); $i++){
            $permission =  $request->permission[$i];
            Permission::create([
                'group_name' => $request->group_name,
                'name' => "$request->group_name-$permission"
            ]);
        }
        return 'success';
        return view('backend.pages.permission.permission_create');
    }
    public function edit(string $groupName){
       $permissions = User::permissions;
        //User::getPermissionByGroupName(base64_decode($groupName));
       $groupByPermissions = Permission::where('group_name',base64_decode($groupName))->get();


        return view('backend.pages.permission.permission_edit', ['groupByPermissions' => $groupByPermissions, 'permissions' => $permissions]);
    }
}
