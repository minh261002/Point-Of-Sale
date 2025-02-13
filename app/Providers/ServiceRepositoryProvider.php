<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ServiceRepositoryProvider extends ServiceProvider
{
    /**
     * Register repositories services.
     */

     protected $repositories = [
        'App\Repositories\Module\ModuleRepositoryInterface' => 'App\Repositories\Module\ModuleRepository',
        'App\Repositories\Permission\PermissionRepositoryInterface' => 'App\Repositories\Permission\PermissionRepository',
        'App\Repositories\Role\RoleRepositoryInterface' => 'App\Repositories\Role\RoleRepository',
        'App\Repositories\User\UserRepositoryInterface' => 'App\Repositories\User\UserRepository',
     ];
    public function register(): void
    {
        foreach ($this->repositories as $interface => $repository) {
            $this->app->bind($interface, $repository);
        }
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}