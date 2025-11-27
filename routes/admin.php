<?php

use App\Http\Controllers\Admin\Auth\AdminAuthenticatedSessionController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\LicenseController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->prefix('admin')->name('admin.')->group(function () {
    Route::get('login', [AdminAuthenticatedSessionController::class, 'create'])
        ->name('login');

    Route::post('login', [AdminAuthenticatedSessionController::class, 'store']);
});

Route::middleware('auth:admin')->prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [AdminDashboardController::class, 'index'])
        ->name('dashboard');

    Route::post('logout', [AdminAuthenticatedSessionController::class, 'destroy'])
        ->name('logout');

    // License Management
    Route::resource('licenses', LicenseController::class);
});

