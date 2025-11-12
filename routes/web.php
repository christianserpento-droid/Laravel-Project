<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Auth;

// 👇 Show welcome page first
Route::get('/', [WelcomeController::class, 'index'])->name('welcome');

// 👇 Auth routes (login, register, password reset)
Auth::routes();

// 👇 Dashboard page (for logged-in users only)
Route::get('/dashboard', [DashboardController::class, 'index'])
    ->name('dashboard')
    ->middleware('auth');
