<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\SuperAdmin\Auth\AuthenticateSessionController as SuperAdminAuth;
use App\Http\Controllers\Admin\Auth\AuthenticateSessionController as AdminAuth;
use App\Http\Controllers\University\Auth\AuthenticateSessionController as UniversityAuth;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\VerifyEmailController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    Route::get('register', [RegisteredUserController::class, 'create'])
                ->name('register');

    Route::post('register', [RegisteredUserController::class, 'store']);

    Route::get('login', [AuthenticatedSessionController::class, 'create'])
                ->name('login');

    Route::post('login', [AuthenticatedSessionController::class, 'store']);

    Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])
                ->name('password.request');

    Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])
                ->name('password.email');

    Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])
                ->name('password.reset');

    Route::post('reset-password', [NewPasswordController::class, 'store'])
                ->name('password.store');
});

Route::middleware('auth')->group(function () {
    Route::get('verify-email', EmailVerificationPromptController::class)
                ->name('verification.notice');

    Route::get('verify-email/{id}/{hash}', VerifyEmailController::class)
                ->middleware(['signed', 'throttle:6,1'])
                ->name('verification.verify');

    Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
                ->middleware('throttle:6,1')
                ->name('verification.send');

    Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])
                ->name('password.confirm');

    Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);

    Route::put('password', [PasswordController::class, 'update'])->name('password.update');

    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
                ->name('logout');
});

Route::prefix('/admin')->name('admin.')->group(function(){
    Route::get('/login', [AdminAuth::class, 'create'])->middleware('guest:admin')->name('login');
    Route::post('/login', [AdminAuth::class, 'store'])->middleware('guest:admin');
    Route::get('/logout', [AdminAuth::class, 'destroy'])->name('logout');
    Route::get('/dashboard', function (){
        return view('admin.dashboard');
    })->middleware('admin');
});
Route::prefix('/university')->name('university.')->group(function(){
    Route::get('/login', [UniversityAuth::class, 'create'])->middleware('guest:university')->name('login');
    Route::post('/login', [UniversityAuth::class, 'store'])->middleware('guest:university');
    Route::get('/logout', [UniversityAuth::class, 'destroy'])->name('logout');
    Route::get('/dashboard', function (){
      return view('university.dashboard');
    })->middleware('university');
});
