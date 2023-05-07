<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard(string $serviceName, string $id){
         return view('backend.dashboard');
    }
}
