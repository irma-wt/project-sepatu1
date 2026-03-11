<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

// Halaman
Route::get('/', function () {
    return view('index');
})->name('home');

// halaman login
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');

// proses form login & logout
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');