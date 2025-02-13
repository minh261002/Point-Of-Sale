<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Module\ModuleController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Permission\PermissionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Role\RoleController;

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

    Route::prefix('permission')->as('permission.')->group(function () {
        Route::middleware(['permission:viewModule'])->group(function () {
            Route::get('/', [PermissionController::class, 'index'])->name('index');
        });

        Route::middleware(['permission:createModule'])->group(function () {
            Route::get('/create', [PermissionController::class, 'create'])->name('create');
            Route::post('/store', [PermissionController::class, 'store'])->name('store');
        });

        Route::middleware(['permission:editModule'])->group(function () {
            Route::get('/edit/{id}', [PermissionController::class, 'edit'])->name('edit');
            Route::put('/update', [PermissionController::class, 'update'])->name('update');
        });

        Route::middleware(['permission:deleteModule'])->group(function () {
            Route::delete('/delete/{id}', [PermissionController::class, 'delete'])->name('delete');
        });
    });

    Route::prefix('role')->as('role.')->group(function () {
        Route::middleware(['permission:viewRole'])->group(function () {
            Route::get('/', [RoleController::class, 'index'])->name('index');
        });

        Route::middleware(['permission:createRole'])->group(function () {
            Route::get('/create', [RoleController::class, 'create'])->name('create');
            Route::post('create', [RoleController::class, 'store'])->name('store');
        });

        Route::middleware(['permission:editRole'])->group(function () {
            Route::get('/edit/{id}', [RoleController::class, 'edit'])->name('edit');
            Route::put('/update', [RoleController::class, 'update'])->name('update');
        });

        Route::middleware(['permission:deleteRole'])->group(function () {
            Route::delete('/{id}', [RoleController::class, 'delete'])->name('delete');
        });
    });

    Route::prefix('admin')->as('admin.')->group(function () {
        Route::middleware(['permission:viewAdmin'])->group(function () {
            Route::get('/', [AdminController::class, 'index'])->name('index');
        });

        Route::middleware(['permission:createAdmin'])->group(function () {
            Route::get('create', [AdminController::class, 'create'])->name('create');
            Route::post('create', [AdminController::class, 'store'])->name('store');
        });

        Route::middleware(['permission:editAdmin'])->group(function () {
            Route::get('edit/{id}', [AdminController::class, 'edit'])->name('edit');
            Route::put('/update', [AdminController::class, 'update'])->name('update');
        });

        Route::middleware(['permission:deleteAdmin'])->group(function () {
            Route::delete('/{id}', [AdminController::class, 'delete'])->name('delete');
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