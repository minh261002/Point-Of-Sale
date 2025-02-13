<?php

namespace App\DataTables\Module;

use App\DataTables\BaseDataTable;
use App\Repositories\Module\ModuleRepositoryInterface;
use App\Enums\Module\ModuleStatus;

class ModuleDataTable extends BaseDataTable
{
    protected $nameTable = 'moduleTable';
    protected $repository;

    public function __construct(
        ModuleRepositoryInterface $repository
    ) {
        $this->repository = $repository;
        parent::__construct();
    }
    public function setView(): void
    {
        $this->view = [
            'action' => 'module.datatable.action',
            'status' => 'module.datatable.status',
            'description' => 'module.datatable.description',
        ];
    }
    public function query()
    {
        return $this->repository->getQueryBuilderOrderBy();
    }

    public function setColumnSearch(): void
    {

        $this->columnAllSearch = [0, 1, 2, 3];
        $this->columnSearchDate = [3];
        $this->columnSearchSelect = [
            [
                'column' => 2,
                'data' => ModuleStatus::asSelectArray()
            ]
        ];

    }
    protected function setCustomColumns(): void
    {
        $this->customColumns = config('datatable_columns.modules', []);
    }

    protected function setCustomEditColumns(): void
    {
        $this->customEditColumns = [
            'action' => $this->view['action'],
            'status' => $this->view['status'],
            'description' => $this->view['description'],
            'created_at' => '{{formatDate($created_at)}}'
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
            'description',
        ];
    }

    public function setCustomFilterColumns(): void
    {
        $this->customFilterColumns = [
            //
        ];
    }
}