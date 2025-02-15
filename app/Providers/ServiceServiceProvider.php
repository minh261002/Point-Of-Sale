<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ServiceServiceProvider extends ServiceProvider
{
    /**
     * Register services services.
     */
    protected $services = [
        'App\Services\Module\ModuleServiceInterface' => 'App\Services\Module\ModuleService',
        'App\Services\Permission\PermissionServiceInterface' => 'App\Services\Permission\PermissionService',
        'App\Services\Role\RoleServiceInterface' => 'App\Services\Role\RoleService',
        'App\Services\User\UserServiceInterface' => 'App\Services\User\UserService',
        'App\Services\Customer\CustomerServiceInterface' => 'App\Services\Customer\CustomerService',
    ];
    public function register(): void
    {
        foreach ($this->services as $interface => $service) {
            $this->app->bind($interface, $service);
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
