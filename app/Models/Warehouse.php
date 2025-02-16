<?php

namespace App\Models;

use App\Enums\ActiveStatus;
use Illuminate\Database\Eloquent\Model;

class Warehouse extends Model
{
    protected $table = 'warehouses';

    protected $guarded = [];

    protected $casts = [
        'status' => ActiveStatus::class,
    ];
}