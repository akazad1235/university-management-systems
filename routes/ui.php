<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UI\LoginUiController;

Route::middleware(['auth'])->name('ui.')->group(function(){
    Route::get('/login', [LoginUiController::class, 'login'])->name('login');
    Route::post('/login', [LoginUiController::class, 'store'])->name('login.store');

});









