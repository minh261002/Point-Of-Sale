<?php

namespace App\Models;

use App\Enums\Log\LogAction;
use App\Enums\Log\LogMethod;
use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    protected $table = 'logs';

    protected $guarded = [];

    protected $casts = [
        'action' => LogAction::class,
        'method' => LogMethod::class,
    ];
}