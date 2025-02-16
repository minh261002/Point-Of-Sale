<?php

namespace App\Enums\Log;

use App\Supports\Enum;


enum LogMethod: string
{
    use Enum;

    case GET = 'GET';
    case POST = 'POST';
    case PUT = 'PUT';
    case PATCH = 'PATCH';
    case DELETE = 'DELETE';

}
