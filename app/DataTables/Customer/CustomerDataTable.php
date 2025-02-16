<?php

namespace App\DataTables\Customer;

use App\DataTables\BaseDataTable;
use App\Enums\ActiveStatus;
use App\Repositories\Customer\CustomerRepositoryInterface;

class CustomerDataTable extends BaseDataTable
{
    protected $nameTable = 'customerTable';
    protected $repository;

    public function __construct(
        CustomerRepositoryInterface $repository
    ) {
        $this->repository = $repository;
        parent::__construct();
    }

    public function setView(): void
    {
        $this->view = [
            'action' => 'customer.datatable.action',
            'image' => 'customer.datatable.image',
            'status' => 'customer.datatable.status',
        ];
    }

    public function query()
    {
        return $this->repository->getQueryBuilderOrderBy();
    }

    public function setColumnSearch(): void
    {
        $this->columnAllSearch = [1, 2, 3, 4];
        $this->columnSearchSelect = [
            [
                'column' => 4,
                'data' => ActiveStatus::asSelectArray()
            ]
        ];
    }

    protected function setCustomColumns(): void
    {
        $this->customColumns = config('datatable_columns.customers', []);
    }

    protected function setCustomEditColumns(): void
    {
        $this->customEditColumns = [
            'image' => $this->view['image'],
            'status' => function ($row) {
                return view($this->view['status'], [
                    'status' => $row->status->value,
                    'id' => $row->id,
                ]);
            },
        ];
    }

    protected function setCustomAddColumns(): void
    {
        $this->customAddColumns = [
            'action' => $this->view['action'],
        ];
    }

    protected function setCustomRawColumns(): void
    {
        $this->customRawColumns = [
            'action',
            'image',
            'role',
            'status',
        ];
    }

    public function setCustomFilterColumns(): void
    {
        $this->customFilterColumns = [
            'role' => function ($query, $keyword) {
                return $query->whereHas('roles', function ($query) use ($keyword) {
                    $query->where('name', 'like', '%' . $keyword . '%');
                });
            },
        ];
    }
}