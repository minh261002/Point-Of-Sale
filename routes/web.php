<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Module\ModuleController;
use App\Http\Controllers\Dashboard\DashboardController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth:web'])->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::prefix('module')->as('module.')->group(function () {
        Route::middleware(['permission:viewModule'])->group(function () {
            Route::get('/', [ModuleController::class, 'index'])->name('index');
        });

        Route::middleware(['permission:createModule'])->group(function () {
            Route::get('/create', [ModuleController::class, 'create'])->name('create');
            Route::post('/store', [ModuleController::class, 'store'])->name('store');
        });

        Route::middleware(['permission:editModule'])->group(function () {
            Route::get('/edit/{id}', [ModuleController::class, 'edit'])->name('edit');
            Route::put('/update', [ModuleController::class, 'update'])->name('update');
        });

        Route::middleware(['permission:deleteModule'])->group(function () {
            Route::delete('/delete/{id}', [ModuleController::class, 'delete'])->name('delete');
        });
    });

});

Route::middleware(['login'])->group(function () {
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'authenticate'])->name('authenticate');

    Route::get('/password/forgot', [AuthController::class, 'forgotPassword'])->name('password.forgot');
    Route::post('/password/forgot', [AuthController::class, 'sendResetLink'])->name('password.email');

    Route::get('/password/reset/{token}/{email}', [AuthController::class, 'resetPassword'])->name('password.reset');
    Route::post('/password/reset', [AuthController::class, 'updatePassword'])->name('password.update');
});
