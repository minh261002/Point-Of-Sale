@extends('layouts.master')
@section('title', 'Quản lý vai trò')

@push('styles')
@endpush

@section('content')
    <div class="container-fluid">
        <div class="page-header d-print-none">
            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h3 class="card-title">
                        Quản lý vai trò
                    </h3>

                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('dashboard') }}">
                                    <i class="bi bi-house"></i>
                                    Dashboard
                                </a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Quản lý vai trò
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <!-- Page body -->
        <div class="page-body">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">
                        Danh sách vai trò
                    </h3>
                    <div class="card-actions">
                        <a href="{{ route('role.create') }}" class="btn btn-primary">
                            <i class="ti ti-plus fs-4 me-1"></i>
                            Thêm mới
                        </a>
                    </div>
                </div>


                <div class="card-body">
                    <div class="table-responsive">
                        @include('layouts.partials.toggle-column')
                        {{ $dataTable->table(['class' => 'table table-bordered table-striped'], true) }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@push('libs-js')
    <script src="{{ asset('js/buttons.server-side.js') }}"></script>
@endpush

@push('scripts')
    {{ $dataTable->scripts() }}

    @include('layouts.partials.scripts', [
        'id_table' => $dataTable->getTableAttribute('id'),
    ])
@endpush
