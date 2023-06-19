<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UI\LoginUiController;
use App\Http\Controllers\UI\ProjectController;
use App\Http\Controllers\UI\ProjectDevSettingController;
use App\Http\Controllers\UI\InputFormController;

Route::middleware(['auth'])->name('ui.')->group(function(){
    Route::get('/login', [LoginUiController::class, 'login'])->name('login');
    Route::post('/login', [LoginUiController::class, 'store'])->name('login.store');


    Route::get('/project', [ProjectController::class, 'index'])->name('project.index');


    Route::prefix('project')->name('project.')->group(function(){

        Route::get('/dev/setting', [ProjectDevSettingController::class, 'index'])->name('dev.setting.index');
        Route::post('/dev/setting', [ProjectDevSettingController::class, 'store'])->name('dev.setting.store');
    });
    Route::prefix('login')->name('login.')->group(function(){
        Route::get('/input/string', [LoginUiController::class, 'index'])->name('dev.setting.index');
        Route::post('/input/string', [LoginUiController::class, 'inputStore'])->name('input.string');
    });
    Route::prefix('/input/form')->name('input_form.')->group(function(){
        Route::get('/string', [InputFormController::class, 'index'])->name('index');
        Route::post('/input/string', [InputFormController::class, 'store'])->name('store');
    });

});









