<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth:web'])->group(function () {
    Route::get('/', function () {
        return view('welcome');
    })->name('home');
});

Route::middleware(['login'])->group(function () {
    Route::get('/login', [AuthController::class, 'login'])->name('login');
});