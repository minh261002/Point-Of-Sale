@extends('layouts.master')

@section('title')
    {{ __('POS System') }}
@endsection


@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <div class="row row-deck row-cards">
                        @include('dashboard.components.top')
                        @include('dashboard.components.bottom')
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    @include('dashboard.components.log')
                </div>
            </div>
        </div>
    </div>
@endsection
