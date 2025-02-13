<?php

use App\Enums\ActiveStatus;
use App\Enums\Module\ModuleStatus;

return [
    ActiveStatus::class => [
        ActiveStatus::Active->value => 'Hoạt động',
        ActiveStatus::InActive->value => 'Không hoạt động',
    ],
    ModuleStatus::class => [
        ModuleStatus::InProgress->value => 'Đang thực hiện',
        ModuleStatus::Completed->value => 'Đã hoàn thành',
    ],
];