<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\TopController;

Route::prefix('admin')->group(function () {
    Route::get('/login', [LoginController::class, 'index'])->name('admin.login.index');
    Route::post('/login', [LoginController::class, 'login'])->name('admin.login.login');
    Route::get('/logout', [LoginController::class, 'logout'])->name('admin.login.logout');
    Route::get('/admin/top', [HomeController::class, 'logout'])->name('admin.login.logout');
  });

  Route::prefix('admin')->middleware('auth:admins')->group(function () {
    Route::get('/', [TopController::class, 'top'])->name('admin.top');
  });
