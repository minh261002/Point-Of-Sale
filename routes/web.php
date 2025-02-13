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
    Route::post('/login', [AuthController::class, 'authenticate'])->name('authenticate');

    Route::get('/password/forgot', [AuthController::class, 'forgotPassword'])->name('password.forgot');
    Route::post('/password/forgot', [AuthController::class, 'sendResetLink'])->name('password.email');

    Route::get('/password/reset/{token}/{email}', [AuthController::class, 'resetPassword'])->name('password.reset');
    Route::post('/password/reset', [AuthController::class, 'updatePassword'])->name('password.update');
});