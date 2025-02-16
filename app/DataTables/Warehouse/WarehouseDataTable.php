<?php

namespace App\DataTables\Warehouse;

use App\DataTables\BaseDataTable;
use App\Enums\ActiveStatus;
use App\Repositories\Warehouse\WarehouseRepositoryInterface;

class WarehouseDataTable extends BaseDataTable
{
    protected $nameTable = 'warehouseTable';
    protected $repository;

    public function __construct(
        WarehouseRepositoryInterface $repository
    ) {
        $this->repository = $repository;
        parent::__construct();
    }

    public function setView(): void
    {
        $this->view = [
            'action' => 'Warehouse.datatable.action',
            'status' => 'Warehouse.datatable.status',
        ];
    }

    public function query()
    {
        return $this->repository->getQueryBuilderOrderBy();
    }

    public function setColumnSearch(): void
    {
        $this->columnAllSearch = [0, 1, 2, 3];
        $this->columnSearchSelect = [
            [
                'column' => 3,
                'data' => ActiveStatus::asSelectArray()
            ]
        ];
    }

    protected function setCustomColumns(): void
    {
        $this->customColumns = config('datatable_columns.warehouses', []);
    }

    protected function setCustomEditColumns(): void
    {
        $this->customEditColumns = [
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
            'status',
        ];
    }

    public function setCustomFilterColumns(): void
    {
        $this->customFilterColumns = [
            //
        ];
    }
}
