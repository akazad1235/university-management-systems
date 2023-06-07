<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UI\LoginUiController;

Route::middleware(['auth'])->group(function(){
    Route::get('/login', [LoginUiController::class, 'index']);
});









