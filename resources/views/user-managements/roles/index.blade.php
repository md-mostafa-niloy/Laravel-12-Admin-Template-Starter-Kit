@extends('layouts.app')
@section('title', 'Roles')
@section('content')
    <x-common.breadcrumb :title="'Roles'"
                         :breadcrumbs="[['label' => 'Dashboard', 'url' => route('dashboard')], ['label' => 'Manage roles']]"/>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h3 class="card-title">All Roles</h3>
                    <div>
                        <a href="{{route('roles.create')}}" class="btn btn-sm btn-secondary d-flex align-items-center" id="addUserBtn">
                            <i class="ph ph-plus me-1"></i>
                            Add
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <x-table id="dataTable"
                             :thead="[
                            [
                                'label' => '#',
                                'class' => 'th-sn',
                            ],
                            [
                                'label' => 'Name',
                                'class' => 'th-name',
                            ],
                            [
                                'label' => 'Permissions',
                                'class' => 'th-permissions',
                            ],
                            [
                                'label' => 'Actions',
                                'class' => 'th-actions',
                            ],
                        ]"
                    />
                </div>
            </div>
        </div>
    </div>

    @include('components.common.datatable-css')
    @include('components.common.datatable-script')
    @include('components.modal.modal')
@endsection
@include('components.user-managements.roles.page-script')
@include('components.user-managements.roles.page-style')
