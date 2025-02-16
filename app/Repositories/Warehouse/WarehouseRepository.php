<?php

namespace App\Repositories\Warehouse;

use App\Repositories\BaseRepository;
use App\Models\Warehouse;

class WarehouseRepository extends BaseRepository implements WarehouseRepositoryInterface
{
    public function getModel()
    {
        return Warehouse::class;
    }
}