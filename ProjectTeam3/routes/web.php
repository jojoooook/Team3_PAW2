<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Rute untuk tampilan login
Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');

// Rute untuk menangani proses login
Route::post('login', [AuthController::class, 'login']);