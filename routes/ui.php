<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UI\LoginUiController;
use App\Http\Controllers\UI\ProjectController;
use App\Http\Controllers\UI\ProjectDevSettingController;

Route::middleware(['auth'])->name('ui.')->group(function(){
    Route::get('/login', [LoginUiController::class, 'login'])->name('login');
    Route::post('/login', [LoginUiController::class, 'store'])->name('login.store');


    Route::get('/project', [ProjectController::class, 'index'])->name('project.index');


    Route::prefix('project')->name('project.')->group(function(){

        Route::get('/dev/setting', [ProjectDevSettingController::class, 'index'])->name('dev.setting.index');
        Route::post('/dev/setting', [ProjectDevSettingController::class, 'store'])->name('dev.setting.store');
    });


});









