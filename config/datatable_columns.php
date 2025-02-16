<?php

return [
    'warehouses' => [
        'name' => [
            'title' => 'Tên kho hàng',
            'orderable' => true,
            'exportable' => true,
            'printable' => true,
            'addClass' => 'text-center align-middle w-200px',
        ],
        'phone' => [
            'title' => 'Số điện thoại',
            'orderable' => true,
            'exportable' => true,
            'printable' => true,
            'addClass' => 'text-center align-middle w-200px',
        ],
        'address' => [
            'title' => 'Địa chỉ',
            'orderable' => true,
            'exportable' => true,
            'printable' => true,
            'addClass' => 'text-center align-middle w-200px',
        ],
        'status' => [
            'title' => 'Trạng thái',
            'orderable' => true,
            'exportable' => true,
            'printable' => true,
            'addClass' => 'text-center align-middle w-200px',
        ],
        'action' => [
            'title' => 'Thao tác',
            'orderable' => false,
            'exportable' => false,
            'printable' => false,
            'addClass' => 'text-center align-middle w-200px',
        ],
    ],
    'categories' => [
        'image' => [
            'title' => 'Ảnh',
            'orderable' => false,
            'exportable' => false,
            'printable' => false,
            'addClass' => 'text-center align-middle w-100px',
        ],
        'name' => [
            'title' => 'Tên chuyên mục',
            'orderable' => true,
            'exportable' => true,
            'printable' => true,
            'addClass' => 'text-center align-middle',
        ],
        'show_home' => [
            'title' => 'Hiển thị trang chủ',
            'orderable' => true,
            'exportable' => true,
            'printable' => true,
            'addClass' => 'text-center align-middle',
        ],
        'show_menu' => [
            'title' => 'Hiển thị menu',
            'orderable' => true,
            'exportable' => true,
            'printable' => true,
            'addClass' => 'text-center align-middle',
        ],
        'status' => [
            'title' => 'Trạng thái',
            'orderable' => true,
            'exportable' => true,
            'printable' => true,
            'addClass' => 'text-center align-middle',
        ],
        'action' => [
            'title' => 'Thao tác',
            'orderable' => false,
            'exportable' => false,
            'printable' => false,
            'addClass' => 'text-center align-middle',
        ],
    ],
    'customers' => [
        'image' => [
            'title' => 'Ảnh',
            'orderable' => false,
            'exportable' => false,
            'printable' => false,
            'addClass' => 'text-center align-middle'
        ],
        'name' => [
            'title' => 'Họ và tên',
            'orderable' => true,
            'exportable' => true,
            'printable' => true,
            'addClass' => 'text-center align-middle'
        ],
        'email' => [
            'title' => 'Email',
            'orderable' => true,
            'exportable' => true,
            'printable' => true,
            'addClass' => 'text-center align-middle'
        ],
        'reward_points' => [
            'title' => 'Điểm thưởng',
            'orderable' => true,
            'exportable' => true,
            'printable' => true,
            'addClass' => 'text-center align-middle'
        ],
        'status' => [
            'title' => 'Trạng thái',
            'orderable' => true,
            'exportable' => true,
            'printable' => true,
            'addClass' => 'text-center align-middle'
        ],
        'action' => [
            'title' => 'Thao tác',
            'orderable' => false,
            'exportable' => false,
            'printable' => false,
            'addClass' => 'text-center align-middle'
        ],
    ],
    'users' => [
        'image' => [
            'title' => 'Ảnh',
            'orderable' => false,
            'exportable' => false,
            'printable' => false,
            'addClass' => 'text-center align-middle'
        ],
        'name' => [
            'title' => 'Họ và tên',
            'orderable' => true,
            'exportable' => true,
            'printable' => true,
            'addClass' => 'text-center align-middle'
        ],
        'email' => [
            'title' => 'Email',
            'orderable' => true,
            'exportable' => true,
            'printable' => true,
            'addClass' => 'text-center align-middle'
        ],
        'role' => [
            'title' => 'Vai trò',
            'orderable' => true,
            'exportable' => true,
            'printable' => true,
            'addClass' => 'text-center align-middle'
        ],
        'status' => [
            'title' => 'Trạng thái',
            'orderable' => true,
            'exportable' => true,
            'printable' => true,
            'addClass' => 'text-center align-middle'
        ],
        'action' => [
            'title' => 'Thao tác',
            'orderable' => false,
            'exportable' => false,
            'printable' => false,
            'addClass' => 'text-center align-middle'
        ],
    ],
    'roles' => [
        'title' => [
            'title' => 'Tiêu đề',
            'orderable' => true,
            'exportable' => true,
            'printable' => true,
            'addClass' => 'text-center align-middle'
        ],
        'name' => [
            'title' => 'Vai trò (ROLE_NAME)',
            'orderable' => true,
            'exportable' => true,
            'printable' => true,
            'addClass' => 'text-center align-middle'
        ],
        'guard_name' => [
            'title' => 'Nhóm quyền (GUARD_NAME)',
            'orderable' => true,
            'exportable' => true,
            'printable' => true,
            'addClass' => 'text-center align-middle'
        ],
        'action' => [
            'title' => 'Thao tác',
            'orderable' => false,
            'exportable' => false,
            'printable' => false,
            'addClass' => 'text-center align-middle'
        ],
    ],
    'permissions' => [
        'title' => [
            'title' => 'Tiêu đề',
            'orderable' => true,
            'exportable' => true,
            'printable' => true,
            'addClass' => 'text-center align-middle'
        ],
        'name' => [
            'title' => 'Quyền (PERMISSION_NAME)',
            'orderable' => true,
            'exportable' => true,
            'printable' => true,
            'addClass' => 'text-center align-middle'
        ],
        'guard_name' => [
            'title' => 'Nhóm quyền (GUARD_NAME)',
            'orderable' => true,
            'exportable' => true,
            'printable' => true,
            'addClass' => 'text-center align-middle'
        ],
        'action' => [
            'title' => 'Thao tác',
            'orderable' => false,
            'exportable' => false,
            'printable' => false,
            'addClass' => 'text-center align-middle'
        ],
    ],
    'modules' => [
        'name' => [
            'title' => 'Tên module',
            'orderable' => true,
            'exportable' => true,
            'printable' => true,
            'addClass' => 'text-center align-middle'
        ],
        'description' => [
            'title' => 'Mô tả',
            'orderable' => true,
            'exportable' => true,
            'printable' => true,
            'addClass' => 'text-center align-middle'
        ],
        'status' => [
            'title' => 'Trạng thái',
            'orderable' => true,
            'exportable' => true,
            'printable' => true,
            'addClass' => 'text-center align-middle'
        ],
        'created_at' => [
            'title' => 'Ngày bắt đầu',
            'orderable' => true,
            'exportable' => true,
            'printable' => true,
            'addClass' => 'text-center align-middle'
        ],
        'action' => [
            'title' => 'Thao tác',
            'orderable' => false,
            'exportable' => false,
            'printable' => false,
            'addClass' => 'text-center align-middle'
        ],
    ],
];