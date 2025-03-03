<?php

namespace Database\Seeders;

use App\Enums\Module\ModuleStatus;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ModuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Module
        DB::table('modules')->insert([
            [
                'id' => 1,
                'name' => 'Quản lý module',
                'description' => 'Quản lý module',
                'status' => ModuleStatus::Completed->value,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'name' => 'Quản lý quyền',
                'description' => 'Quản lý quyền',
                'status' => ModuleStatus::Completed->value,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 3,
                'name' => 'Quản lý vai trò',
                'description' => 'Quản lý vai trò',
                'status' => ModuleStatus::Completed->value,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 4,
                'name' => 'Quản lý admin',
                'description' => 'Quản lý admin',
                'status' => ModuleStatus::Completed->value,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 5,
                'name' => 'Quản lý danh mục',
                'description' => 'Quản lý danh mục',
                'status' => ModuleStatus::Completed->value,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 6,
                'name' => 'Quản lý khách hàng',
                'description' => 'Quản lý khách hàng',
                'status' => ModuleStatus::Completed->value,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 7,
                'name' => 'Quản lý kho',
                'description' => 'Quản lý kho',
                'status' => ModuleStatus::Completed->value,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);

        //Permission
        DB::table('permissions')->insert([
            [
                'title' => 'Xem module',
                'name' => 'viewModule',
                'guard_name' => 'web',
                'module_id' => 1,
            ],
            [
                'title' => 'Tạo module',
                'name' => 'createModule',
                'guard_name' => 'web',
                'module_id' => 1,
            ],
            [
                'title' => 'Sửa module',
                'name' => 'editModule',
                'guard_name' => 'web',
                'module_id' => 1,
            ],
            [
                'title' => 'Xóa module',
                'name' => 'deleteModule',
                'guard_name' => 'web',
                'module_id' => 1,
            ],
            [
                'title' => 'Xem quyền',
                'name' => 'viewPermission',
                'guard_name' => 'web',
                'module_id' => 2,
            ],
            [
                'title' => 'Tạo quyền',
                'name' => 'createPermission',
                'guard_name' => 'web',
                'module_id' => 2,
            ],
            [
                'title' => 'Sửa quyền',
                'name' => 'editPermission',
                'guard_name' => 'web',
                'module_id' => 2,
            ],
            [
                'title' => 'Xóa quyền',
                'name' => 'deletePermission',
                'guard_name' => 'web',
                'module_id' => 2,
            ],
            [
                'title' => 'Xem vai trò',
                'name' => 'viewRole',
                'guard_name' => 'web',
                'module_id' => 3,
            ],
            [
                'title' => 'Tạo vai trò',
                'name' => 'createRole',
                'guard_name' => 'web',
                'module_id' => 3,
            ],
            [
                'title' => 'Sửa vai trò',
                'name' => 'editRole',
                'guard_name' => 'web',
                'module_id' => 3,
            ],
            [
                'title' => 'Xóa vai trò',
                'name' => 'deleteRole',
                'guard_name' => 'web',
                'module_id' => 3,
            ],
            [
                'title' => 'Xem admin',
                'name' => 'viewUser',
                'guard_name' => 'web',
                'module_id' => 4,
            ],
            [
                'title' => 'Tạo admin',
                'name' => 'createUser',
                'guard_name' => 'web',
                'module_id' => 4,
            ],
            [
                'title' => 'Sửa admin',
                'name' => 'editUser',
                'guard_name' => 'web',
                'module_id' => 4,
            ],
            [
                'title' => 'Xóa admin',
                'name' => 'deleteUser',
                'guard_name' => 'web',
                'module_id' => 4,
            ],
            [
                'title' => 'Xem danh mục',
                'name' => 'viewCategory',
                'guard_name' => 'web',
                'module_id' => 5,
            ],
            [
                'title' => 'Tạo danh mục',
                'name' => 'createCategory',
                'guard_name' => 'web',
                'module_id' => 5,
            ],
            [
                'title' => 'Sửa danh mục',
                'name' => 'editCategory',
                'guard_name' => 'web',
                'module_id' => 5,
            ],
            [
                'title' => 'Xóa danh mục',
                'name' => 'deleteCategory',
                'guard_name' => 'web',
                'module_id' => 5,
            ],
            [
                'title' => 'Xem khách hàng',
                'name' => 'viewCustomer',
                'guard_name' => 'web',
                'module_id' => 6,
            ],
            [
                'title' => 'Tạo khách hàng',
                'name' => 'createCustomer',
                'guard_name' => 'web',
                'module_id' => 6,
            ],
            [
                'title' => 'Sửa khách hàng',
                'name' => 'editCustomer',
                'guard_name' => 'web',
                'module_id' => 6,
            ],
            [
                'title' => 'Xóa khách hàng',
                'name' => 'deleteCustomer',
                'guard_name' => 'web',
                'module_id' => 6,
            ],
            [
                'title' => 'Xem kho',
                'name' => 'viewWarehouse',
                'guard_name' => 'web',
                'module_id' => 7,
            ],
            [
                'title' => 'Tạo kho',
                'name' => 'createWarehouse',
                'guard_name' => 'web',
                'module_id' => 7,
            ],
            [
                'title' => 'Sửa kho',
                'name' => 'editWarehouse',
                'guard_name' => 'web',
                'module_id' => 7,
            ],
            [
                'title' => 'Xóa kho',
                'name' => 'deleteWarehouse',
                'guard_name' => 'web',
                'module_id' => 7,
            ],
        ]);

        //Role
        DB::table('roles')->insert([
            [
                'id' => 1,
                'title' => 'Developer',
                'name' => 'developer',
                'guard_name' => 'web',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        //Role Permission
        DB::table('role_has_permissions')->insert([
            [
                'permission_id' => 1,
                'role_id' => 1,
            ],
            [
                'permission_id' => 2,
                'role_id' => 1,
            ],
            [
                'permission_id' => 3,
                'role_id' => 1,
            ],
            [
                'permission_id' => 4,
                'role_id' => 1,
            ],
            [
                'permission_id' => 5,
                'role_id' => 1,
            ],
            [
                'permission_id' => 6,
                'role_id' => 1,
            ],
            [
                'permission_id' => 7,
                'role_id' => 1,
            ],
            [
                'permission_id' => 8,
                'role_id' => 1,
            ],
            [
                'permission_id' => 9,
                'role_id' => 1,
            ],
            [
                'permission_id' => 10,
                'role_id' => 1,
            ],
            [
                'permission_id' => 11,
                'role_id' => 1,
            ],
            [
                'permission_id' => 12,
                'role_id' => 1,
            ],
            [
                'permission_id' => 13,
                'role_id' => 1,
            ],
            [
                'permission_id' => 14,
                'role_id' => 1,
            ],
            [
                'permission_id' => 15,
                'role_id' => 1,
            ],
            [
                'permission_id' => 16,
                'role_id' => 1,
            ],
            [
                'permission_id' => 17,
                'role_id' => 1,
            ],
            [
                'permission_id' => 18,
                'role_id' => 1,
            ],
            [
                'permission_id' => 19,
                'role_id' => 1,
            ],
            [
                'permission_id' => 20,
                'role_id' => 1,
            ],
            [
                'permission_id' => 21,
                'role_id' => 1,
            ],
            [
                'permission_id' => 22,
                'role_id' => 1,
            ],
            [
                'permission_id' => 23,
                'role_id' => 1,
            ],
            [
                'permission_id' => 24,
                'role_id' => 1,
            ],
            [
                'permission_id' => 25,
                'role_id' => 1,
            ],
            [
                'permission_id' => 26,
                'role_id' => 1,
            ],
            [
                'permission_id' => 27,
                'role_id' => 1,
            ],
            [
                'permission_id' => 28,
                'role_id' => 1,
            ],
        ]);

        //Admin
        DB::table('model_has_roles')->insert([
            [
                'role_id' => 1,
                'model_type' => 'App\Models\User',
                'model_id' => 1,
            ],
        ]);
    }
}
