<?php

namespace App\Http\Controllers\Customer;

use App\DataTables\Customer\CustomerDataTable;
use App\Enums\ActiveStatus;
use App\Http\Controllers\Controller;
use App\Http\Requests\Customer\CustomerRequest;
use App\Repositories\Customer\CustomerRepositoryInterface;
use App\Services\Customer\CustomerServiceInterface;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    protected $repository;
    protected $service;

    public function __construct(
        CustomerRepositoryInterface $repository,
        CustomerServiceInterface $service
    ) {
        $this->repository = $repository;
        $this->service = $service;
    }

    public function index(CustomerDataTable $dataTable)
    {
        return $dataTable->render('customer.index');
    }

    public function create()
    {
        $status = ActiveStatus::asSelectArray();
        return view('customer.create', compact('status'));
    }

    public function store(CustomerRequest $request)
    {
        $this->service->store($request);

        return redirect()->route('customer.index')->with('success', 'Thêm khách hàng thành công');
    }

    public function edit($id)
    {
        $customer = $this->repository->findOrFail($id);
        $status = ActiveStatus::asSelectArray();
        return view('customer.edit', compact('customer', 'status'));
    }

    public function update(CustomerRequest $request)
    {
        $this->service->update($request);
        return redirect()->route('customer.index')->with('success', 'Cập nhật khách hàng thành công');
    }

    public function updateStatus(Request $request)
    {
        $data = $request->only(['id', 'status']);
        $this->repository->update($data['id'], $data);
        return response()->json(['status' => 'success', 'message' => 'Cập nhật trạng thái thành công']);
    }

    public function delete($id)
    {
        $this->repository->delete($id);
        return response()->json(['status' => 'success', 'message' => 'Xóa khách hàng thành công']);
    }
}