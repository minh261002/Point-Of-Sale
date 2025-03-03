<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Module\ModuleController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Permission\PermissionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Role\RoleController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Customer\CustomerController;
use App\Http\Controllers\Category\CategoryController;

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

    Route::prefix('user')->as('user.')->group(function () {
        Route::middleware(['permission:viewUser'])->group(function () {
            Route::get('/', [UserController::class, 'index'])->name('index');
        });

        Route::middleware(['permission:createUser'])->group(function () {
            Route::get('create', [UserController::class, 'create'])->name('create');
            Route::post('create', [UserController::class, 'store'])->name('store');
        });

        Route::middleware(['permission:editUser'])->group(function () {
            Route::get('edit/{id}', [UserController::class, 'edit'])->name('edit');
            Route::put('/update', [UserController::class, 'update'])->name('update');
            Route::patch('/update-status', [UserController::class, 'updateStatus'])->name('update.status');
        });

        Route::middleware(['permission:deleteUser'])->group(function () {
            Route::delete('/{id}', [UserController::class, 'delete'])->name('delete');
        });
    });

    Route::prefix('customer')->as('customer.')->group(function () {
        Route::middleware(['permission:viewCustomer'])->group(function () {
            Route::get('/', [CustomerController::class, 'index'])->name('index');
        });

        Route::middleware(['permission:createCustomer'])->group(function () {
            Route::get('create', [CustomerController::class, 'create'])->name('create');
            Route::post('create', [CustomerController::class, 'store'])->name('store');
        });

        Route::middleware(['permission:editCustomer'])->group(function () {
            Route::get('edit/{id}', [CustomerController::class, 'edit'])->name('edit');
            Route::put('/update', [CustomerController::class, 'update'])->name('update');
            Route::patch('/update-status', [CustomerController::class, 'updateStatus'])->name('update.status');
        });

        Route::middleware(['permission:deleteCustomer'])->group(function () {
            Route::delete('/{id}', [CustomerController::class, 'delete'])->name('delete');
        });
    });

    Route::prefix('category')->as('category.')->group(function () {
        Route::middleware(['permission:viewCategory'])->group(function () {
            Route::get('/', [CategoryController::class, 'index'])->name('index');
            Route::get('/get', [CategoryController::class, 'get'])->name('get');
        });

        Route::middleware(['permission:createCategory'])->group(function () {
            Route::get('/create', [CategoryController::class, 'create'])->name('create');
            Route::post('/store', [CategoryController::class, 'store'])->name('store');
        });

        Route::middleware(['permission:editCategory'])->group(function () {
            Route::get('/edit/{id}', [CategoryController::class, 'edit'])->name('edit');
            Route::put('/update', [CategoryController::class, 'update'])->name('update');
            Route::patch('/update-status', [CategoryController::class, 'updateStatus'])->name('update.status');
        });

        Route::middleware(['permission:deleteCategory'])->group(function () {
            Route::delete('/delete/{id}', [CategoryController::class, 'delete'])->name('delete');
        });
    });

    Route::prefix('warehouse')->as('warehouse.')->group(function () {
        Route::middleware(['permission:viewWarehouse'])->group(function () {
            Route::get('/', [WarehouseController::class, 'index'])->name('index');
        });

        Route::middleware(['permission:createWarehouse'])->group(function () {
            Route::get('/create', [WarehouseController::class, 'create'])->name('create');
            Route::post('/store', [WarehouseController::class, 'store'])->name('store');
        });

        Route::middleware(['permission:editWarehouse'])->group(function () {
            Route::get('/edit/{id}', [WarehouseController::class, 'edit'])->name('edit');
            Route::put('/update', [WarehouseController::class, 'update'])->name('update');
            Route::patch('/update-status', [WarehouseController::class, 'updateStatus'])->name('update.status');
        });

        Route::middleware(['permission:deleteWarehouse'])->group(function () {
            Route::delete('/delete/{id}', [WarehouseController::class, 'delete'])->name('delete');
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