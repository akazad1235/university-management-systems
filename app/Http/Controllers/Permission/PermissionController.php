<?php

namespace App\Http\Controllers\Permission;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;

class PermissionController extends Controller
{
    public function index(){
        $permissionsGroupName = User::getPermissionGroupBy();
        return view('backend.pages.permission.permission_create', ['permissionsGroupName' => $permissionsGroupName]);
    }
}
