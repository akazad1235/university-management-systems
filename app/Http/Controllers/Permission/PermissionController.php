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
       $permissions = Permission::get()->groupBy('group_name');
//        foreach($permissions as $key => $permission){
//            dd($permission);
//        }
//
//        return 'ok';

        return view('backend.pages.permission.permission_index', ['permissions' => $permissions]);
    }
}
