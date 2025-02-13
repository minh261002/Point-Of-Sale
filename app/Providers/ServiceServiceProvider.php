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
