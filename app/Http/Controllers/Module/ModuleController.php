<?php

namespace App\Http\Controllers\Module;

use App\DataTables\Module\ModuleDataTable;
use App\Enums\Module\ModuleStatus;
use App\Repositories\Module\ModuleRepositoryInterface;
use App\Services\Module\ModuleServiceInterface;
use App\Http\Controllers\Controller;
use App\Http\Requests\Module\ModuleRequest;

class ModuleController extends Controller
{
    protected $repository;
    protected $service;

    public function __construct(
        ModuleRepositoryInterface $repository,
        ModuleServiceInterface $service
    ) {
        $this->repository = $repository;
        $this->service = $service;
    }

    public function index(ModuleDataTable $dataTable)
    {
        return $dataTable->render('module.index');
    }

    public function create()
    {
        $status = ModuleStatus::asSelectArray();
        return view('module.create', compact('status'));
    }

    public function store(ModuleRequest $request)
    {
        $this->service->store($request);
        return redirect()->route('module.index')->with('success', 'Thêm module mới thành công');
    }

    public function edit(int $id)
    {
        $status = ModuleStatus::asSelectArray();
        $module = $this->repository->findOrFail($id);
        return view('module.edit', compact('module', 'status'));
    }

    public function update(ModuleRequest $request)
    {
        $this->service->update($request);
        return redirect()->route('module.index')->with('success', 'Cập nhật module thành công');
    }

    public function delete(int $id)
    {
        $this->repository->delete($id);
        return response()->json(['status' => 'success', 'message' => 'Xóa module thành công']);
    }
}