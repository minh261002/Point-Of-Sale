<?php

namespace App\DataTables\User;

use App\DataTables\BaseDataTable;
use App\Enums\ActiveStatus;
use App\Repositories\User\UserRepositoryInterface;

class UserDataTable extends BaseDataTable
{
    protected $nameTable = 'userTable';
    protected $repository;

    public function __construct(
        UserRepositoryInterface $repository
    ) {
        $this->repository = $repository;
        parent::__construct();
    }

    public function setView(): void
    {
        $this->view = [
            'action' => 'user.datatable.action',
            'image' => 'user.datatable.image',
            'status' => 'user.datatable.status',
            'role' => 'user.datatable.role',
        ];
    }

    public function query()
    {
        return $this->repository->getQueryBuilderOrderBy();
    }

    public function setColumnSearch(): void
    {
        $this->columnAllSearch = [1, 2, 3, 4];
        $this->columnSearchDate = [4];
        $this->columnSearchSelect = [
            [
                'column' => 3,
                'data' => ActiveStatus::asSelectArray()
            ]
        ];
    }

    protected function setCustomColumns(): void
    {
        $this->customColumns = config('datatable_columns.users', []);
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
            'role' => function ($row) {
                return '<code>' . $row->roles->pluck('title')->implode(', ') . '</code>';
            },
            'created_at' => '{{format_datetime($created_at)}}',
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