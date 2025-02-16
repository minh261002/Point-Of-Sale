<?php

namespace App\Providers;

use App\Enums\Log\LogAction;
use Illuminate\Support\ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\Auth;
use App\Models\Log as LogModel;
use Illuminate\Auth\Events\Login;
use Illuminate\Auth\Events\Logout;

class LogServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        // Ghi log Login / Logout
        $this->logUserAuth();
    }


    /**
     * Ghi log khi user LOGIN / LOGOUT
     */
    protected function logUserAuth(): void
    {


        // Ghi log khi user LOGIN
        Event::listen(Login::class, function ($event) {
            LogModel::create([
                'table_name' => null,
                'action' => LogAction::Login,
                'user_id' => $event->user->id,
                'user_name' => $event->user->name,
                'ip_address' => request()->ip(),
                'user_agent' => request()->userAgent(),
                'url' => request()->fullUrl(),
                'method' => request()->method(),
                'status' => 200,
            ]);
        });

        // Ghi log khi user LOGOUT
        Event::listen(Logout::class, function ($event) {
            LogModel::create([
                'table_name' => null,
                'action' => LogAction::Logout->value,
                'user_id' => $event->user->id,
                'user_name' => $event->user->name,
                'ip_address' => request()->ip(),
                'user_agent' => request()->userAgent(),
                'url' => request()->fullUrl(),
                'method' => request()->method(),
                'status' => 200,
            ]);
        });
    }
}
