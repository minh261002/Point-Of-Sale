<?php

namespace App\Http\Controllers\Warehouse;

use App\DataTables\Warehouse\WarehouseDataTable;
use App\Enums\ActiveStatus;
use App\Http\Controllers\Controller;
use App\Repositories\Warehouse\WarehouseRepositoryInterface;
use App\Http\Requests\Warehouse\WarehouseRequest;
use App\Services\Warehouse\WarehouseServiceInterface;
use Illuminate\Http\Request;

class WarehouseController extends Controller
{
    protected $repository;
    protected $service;

    public function __construct(
        WarehouseRepositoryInterface $repository,
        WarehouseServiceInterface $service
    ) {
        $this->repository = $repository;
        $this->service = $service;
    }

    public function index(WarehouseDataTable $dataTable)
    {
        return $dataTable->render('warehouse.index');
    }

    public function create()
    {
        $status = ActiveStatus::asSelectArray();
        return view('warehouse.create', compact('status'));
    }

    public function store(WarehouseRequest $request)
    {
        $this->service->store($request);
        return redirect()->route('warehouse.index')->with('success', 'Thêm mới kho hàng thành công');
    }

    public function edit($id)
    {
        $warehouse = $this->repository->findOrFail($id);
        $status = ActiveStatus::asSelectArray();
        return view('warehouse.edit', compact('warehouse', 'status'));
    }

    public function update(WarehouseRequest $request)
    {
        $this->service->update($request);
        return redirect()->route('warehouse.index')->with('success', 'Cập nhật kho hàng thành công');
    }

    public function updateStatus(Request $request)
    {
        $data = $request->only('id', 'status');

        $this->repository->update($data['id'], $data);
        return response()->json(['status' => 'success', 'message' => 'Cập nhật trạng thái kho hàng thành công']);
    }

    public function delete($id)
    {
        $this->repository->delete($id);
        return response()->json([
            'status' => 'success',
            'message' => 'Xóa kho hàng thành công'
        ]);
    }
}
