<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Permission\RolePermissionController;
use App\Http\Controllers\Permission\PermissionController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
   // return view('backend.dashboard');
    return view('welcome');
});

Route::middleware(['auth'])->group(function(){
    //role permission
    Route::middleware(['role:super-admin|admin'])->prefix('/permission')->name('permission.')->group(function(){
        Route::get('/role', [RolePermissionController::class, 'index'])->name('role');
        Route::get('/role/create', [RolePermissionController::class, 'create'])->name('role.create');
        Route::post('/role/store', [RolePermissionController::class, 'store'])->name('role.store');
        Route::get('/role/edit/{id}', [RolePermissionController::class, 'edit'])->name('role.edit');
        Route::post('/role/update/{id}', [RolePermissionController::class, 'update'])->name('role.update');


        Route::get('/permission/index', [PermissionController::class, 'index'])->name('index');


    });
    //users
    Route::middleware(['role:super-admin|admin'])->prefix('/user')->name('user.')->group(function(){
        Route::get('/index', [UserController::class, 'index'])->name('index');
        Route::get('/create', [UserController::class, 'create'])->name('create');
        Route::post('/store', [UserController::class, 'store'])->name('store');
    });

    //services
    Route::prefix('/service')->name('services.')->group(function(){
        Route::get('/list', [ServiceController::class, 'index'])->name('service');
    });
    //dashboard
    Route::prefix('/{serviceName}')->name('service.')->group(function(){
        Route::get('/dashboard/{id}', [DashboardController::class, 'dashboard'])->name('dashboard');
    });
});

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
   // return view('dashboard');
   // return view('backend.dashboard');
    return view('backend.service');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
