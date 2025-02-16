<?php

namespace App\Services\Warehouse;

use App\Repositories\Warehouse\WarehouseRepositoryInterface;
use Illuminate\Http\Request;

class WarehouseService implements WarehouseServiceInterface
{
    protected $data;

    protected $repository;

    public function __construct(WarehouseRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function store(Request $request)
    {
        $this->data = $request->validated();
        if ($this->data['image'] == null) {
            $this->data['image'] = 'images/not-found.jpg';
        }
        return $this->repository->create($this->data);
    }

    public function update(Request $request)
    {
        $this->data = $request->validated();
        if ($this->data['image'] == null) {
            $this->data['image'] = 'images/not-found.jpg';
        }
        return $this->repository->update($this->data['id'], $this->data);
    }
}
