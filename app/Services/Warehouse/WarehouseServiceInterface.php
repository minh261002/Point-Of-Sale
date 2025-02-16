<?php

namespace App\Services\Warehouse;

use Illuminate\Http\Request;

interface WarehouseServiceInterface
{
    public function store(Request $request);

    public function update(Request $request);
}