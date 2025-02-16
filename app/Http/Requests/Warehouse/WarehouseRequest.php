<?php

namespace App\Http\Requests\Warehouse;

use App\Http\Requests\BaseRequest;

class WarehouseRequest extends BaseRequest
{
    protected function methodPost()
    {
        return [
            'name' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'lat' => 'required',
            'lng' => 'required',
            'status' => 'required',
        ];
    }

    protected function methodPut()
    {
        return [
            'id' => 'required|exists:warehouses,id',
            'name' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'lat' => 'required',
            'lng' => 'required',
            'status' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Nhập tên kho hàng',
            'address.required' => 'Nhập địa chỉ kho hàng',
            'lat.required' => 'Nhập vĩ độ',
            'lng.required' => 'Nhập kinh độ',
            'status.required' => 'Chọn trạng thái',
        ];
    }
}
