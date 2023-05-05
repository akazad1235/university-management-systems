<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\RolePermissionController;
use App\Http\Controllers\UserController;

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



Route::middleware(['auth'])->prefix('/permission')->name('permission.')->group(function(){
    Route::get('/role', [RolePermissionController::class, 'index'])->name('role');
    Route::get('/role/create', [RolePermissionController::class, 'create'])->name('role.create');
    Route::post('/role/store', [RolePermissionController::class, 'store'])->name('role.store');
    Route::post('/role/show/{id}', [RolePermissionController::class, 'show'])->name('role.show');
    Route::post('/role/store', [RolePermissionController::class, 'store'])->name('role.store');
});

Route::middleware(['auth'])->prefix('/user')->name('user.')->group(function(){
    Route::get('/index', [UserController::class, 'index'])->name('index');
    Route::get('/create', [UserController::class, 'create'])->name('create');
    Route::post('/store', [UserController::class, 'store'])->name('store');
});

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
   // return view('dashboard');
    return view('backend.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
