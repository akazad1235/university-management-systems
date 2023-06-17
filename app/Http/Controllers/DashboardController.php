<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard(string $serviceName, string $id){
       //return base64_decode($id);
         session()->put('sessionId', base64_decode($id));
         return view('backend.dashboard');
    }
}
