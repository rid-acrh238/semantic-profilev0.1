<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;

Route::redirect('/', '/login');

Route::middleware('guest')->group(function () {
    Route::get('/login', [LoginController::class, 'create'])
        ->name('login');

    Route::post('/login', [LoginController::class, 'store'])
        ->name('login.store');
});

Route::post('/logout', LogoutController::class)
    ->middleware('auth')
    ->name('logout');

Route::middleware(['auth', 'role:admin'])->prefix('admin')
    ->name('admin.')->group(function () {
        Route::view('/dashboard', 'admin.dashboard')
            ->name('dashboard');
    });

Route::middleware(['auth', 'role:mahasiswa'])->prefix('mahasiswa')
    ->name('mahasiswa.')->group(function () {
        Route::view('/dashboard', 'mahasiswa.dashboard')
            ->name('dashboard');
    });
