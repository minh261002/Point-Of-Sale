<?php

use App\Enums\ActiveStatus;
use App\Enums\Module\ModuleStatus;

return [
    ActiveStatus::class => [
        ActiveStatus::Active => 'Hoạt động',
        ActiveStatus::InActive => 'Không hoạt động',
    ],
    ModuleStatus::class => [
        ModuleStatus::InProgress => 'Đang thực hiện',
        ModuleStatus::Completed => 'Đã hoàn thành',
    ],
];