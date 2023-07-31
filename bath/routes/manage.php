<?php

use App\Http\Controllers\Manage\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Manage\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Manage\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Manage\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Manage\Auth\NewPasswordController;
use App\Http\Controllers\Manage\Auth\PasswordController;
use App\Http\Controllers\Manage\Auth\PasswordResetLinkController;
use App\Http\Controllers\Manage\Auth\RegisteredUserController;
use App\Http\Controllers\Manage\Auth\VerifyEmailController;
use App\Http\Controllers\Manage\AdminController;

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('manage.welcome');
});


Route::resource('admin', AdminController::class)
->middleware('auth:manage');


Route::get('/dashboard', function () {
    return view('manage.dashboard');
})->middleware(['auth:manage', 'verified'])->name('dashboard');


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

Route::middleware('auth:manage')->group(function () {
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
