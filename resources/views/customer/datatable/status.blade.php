@php
    $admin = \App\Models\User::find($id);
    $adminRole = $admin->roles->pluck('name')->toArray();
@endphp
@if (!in_array('developer', $adminRole))
    <div class="w-100 d-flex align-items-center justify-content-center">
        <label class="form-check form-switch mb-0">
            <input class="form-check-input" type="checkbox" {{ $status == 'active' ? 'checked' : '' }}
                data-id="{{ $id }}" style="transform: scale(1.5);" />
        </label>
    </div>
@else
    <span @class(['badge', App\Enums\ActiveStatus::from($status)->badge()])>{{ \App\Enums\ActiveStatus::getDescription($status) }}</span>
@endif
