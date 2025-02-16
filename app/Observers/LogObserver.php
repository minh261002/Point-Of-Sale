<?php

namespace App\Observers;

use App\Models\Log as LogModel;
use Illuminate\Database\Eloquent\Model;
use App\Enums\Log\LogAction;
use Illuminate\Support\Facades\Auth;

class LogObserver
{
    /**
     * Ghi log khi tạo dữ liệu mới.
     */
    public function created(Model $model): void
    {
        LogModel::create([
            'table_name' => $model->getTable(),
            'action' => LogAction::Create->value,
            'user_id' => Auth::id(),
            'user_name' => Auth::user()?->name,
            'ip_address' => request()->ip(),
            'user_agent' => request()->userAgent(),
            'url' => request()->fullUrl(),
            'method' => request()->method(),
            'status' => 200,
        ]);
    }

    /**
     * Ghi log khi cập nhật dữ liệu.
     */
    public function updated(Model $model): void
    {
        $changes = $model->getChanges();
        foreach ($changes as $column => $newValue) {
            LogModel::create([
                'table_name' => $model->getTable(),
                'action' => LogAction::Update->value,
                'user_id' => Auth::id(),
                'user_name' => Auth::user()?->name,
                'ip_address' => request()->ip(),
                'user_agent' => request()->userAgent(),
                'url' => request()->fullUrl(),
                'method' => request()->method(),
                'status' => 200,
            ]);
        }
    }

    /**
     * Ghi log khi xóa dữ liệu.
     */
    public function deleted(Model $model): void
    {
        LogModel::create([
            'table_name' => $model->getTable(),
            'action' => LogAction::Delete->value,
            'user_id' => Auth::id(),
            'user_name' => Auth::user()?->name,
            'ip_address' => request()->ip(),
            'user_agent' => request()->userAgent(),
            'url' => request()->fullUrl(),
            'method' => request()->method(),
            'status' => 200,
        ]);
    }
}