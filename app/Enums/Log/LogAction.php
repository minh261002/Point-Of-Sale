<?php

namespace App\Enums\Log;

use App\Supports\Enum;


enum LogAction: string
{
    use Enum;

    case Create = 'create';
    case Update = 'update';
    case Delete = 'delete';
    case Login = 'login';
    case Logout = 'logout';
}