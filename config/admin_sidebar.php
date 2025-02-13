<?php

return [
    [
        'active' => ['user.*'],
        'show' => ['user.*'],
        'title' => 'Quản trị viên',
        'icon' => 'ti ti-user-shield fs-2',
        'permission' => ['viewUser', 'createUser', 'editUser', 'deleteUser'],
        'children' => [
            [
                'title' => 'Thêm mới',
                'route' => 'user.create',
                'icon' => 'ti ti-plus fs-3 me-2',
                'permission' => 'createUser'
            ],
            [
                'title' => 'Danh sách',
                'route' => 'user.index',
                'icon' => 'ti ti-list fs-3 me-2',
                'permission' => 'viewUser'
            ]
        ]
    ],
    [
        'active' => ['role.*'],
        'show' => ['role.*'],
        'title' => 'Vai trò',
        'icon' => 'ti ti-code fs-2',
        'permission' => ['viewRole', 'createRole', 'editRole', 'deleteRole'],
        'children' => [
            [
                'title' => 'Thêm mới',
                'route' => 'role.create',
                'icon' => 'ti ti-plus fs-3 me-2',
                'permission' => 'createRole'
            ],
            [
                'title' => 'Danh sách',
                'route' => 'role.index',
                'icon' => 'ti ti-list fs-3 me-2',
                'permission' => 'viewRole'
            ]
        ]
    ],
    [
        'active' => ['permission.*'],
        'show' => ['permission.*'],
        'title' => 'Quyền',
        'icon' => 'ti ti-code fs-2',
        'permission' => ['viewPermission', 'createPermission', 'editPermission', 'deletePermission'],
        'children' => [
            [
                'title' => 'Thêm mới',
                'route' => 'permission.create',
                'icon' => 'ti ti-plus fs-3 me-2',
                'permission' => 'createPermission'
            ],
            [
                'title' => 'Danh sách',
                'route' => 'permission.index',
                'icon' => 'ti ti-list fs-3 me-2',
                'permission' => 'viewPermission'
            ]
        ],
    ],
    [
        'active' => ['module.*'],
        'show' => ['module.*'],
        'title' => 'Module',
        'icon' => 'ti ti-code fs-2',
        'permission' => ['viewModule', 'createModule', 'editModule', 'deleteModule'],
        'children' => [
            [
                'title' => 'Thêm mới',
                'route' => 'module.create',
                'icon' => 'ti ti-plus fs-3 me-2',
                'permission' => 'createModule'
            ],
            [
                'title' => 'Danh sách',
                'route' => 'module.index',
                'icon' => 'ti ti-list fs-3 me-2',
                'permission' => 'viewModule'
            ]
        ]
    ]
];