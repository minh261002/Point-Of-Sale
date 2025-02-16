<?php

namespace App\Http\Controllers\Warehouse;

use App\DataTables\Warehouse\WarehouseDataTable;
use App\Enums\ActiveStatus;
use App\Http\Controllers\Controller;
use App\Http\Requests\Warehouse\WarehouseRequest;
use App\Repositories\Warehouse\WarehouseRepositoryInterface;
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
        return redirect()->route('warehouse.index')->with('success', 'Thêm mới kho thành công');
    }

    public function edit($id)
    {
        $warehouse = $this->repository->find($id);
        $status = ActiveStatus::asSelectArray();
        return view('warehouse.edit', compact('warehouse', 'status'));
    }

    public function update(WarehouseRequest $request)
    {
        $this->service->update($request);
        return redirect()->route('warehouse.index')->with('success', 'Cập nhật kho thành công');
    }

    public function updateStatus(Request $request)
    {
        $data = $request->only('id', 'status');

        $this->repository->update($data['id'], $data);
        return response()->json(['status' => 'success', 'message' => 'Cập nhật trạng thái kho thành công']);
    }

    public function delete($id)
    {
        $this->repository->delete($id);
        return response()->json([
            'status' => 'success',
            'message' => 'Xóa kho thành công'
        ]);
    }

    public function get()
    {
        $offset = request()->get('offset', 0);
        $limit = 10;

        $categories = $this->repository->getFlatTree();
        $categoriesArray = $categories->toArray();

        if (request()->has('search')) {
            $search = request()->get('search');
            $categoriesArray = array_filter($categoriesArray, function ($cegory) use ($search) {
                return strpos($cegory['name'], $search) !== false;
            });
        }

        $total = count($categoriesArray);

        $categoriesArray = array_slice($categoriesArray, $offset, $limit);

        return response()->json([
            'categories' => $categoriesArray,
            'total' => $total
        ]);
    }
}
