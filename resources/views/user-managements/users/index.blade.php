@extends('layouts.app')
@section('title', 'Users')
@section('content')
    <x-common.breadcrumb :title="'Users'"
                         :breadcrumbs="[['label' => 'Dashboard', 'url' => route('dashboard')], ['label' => 'Manage users']]"/>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h3 class="card-title">All users</h3>
                    <div>
                        <button class="btn btn-sm btn-secondary d-flex align-items-center" id="addUserBtn">
                            <i class="ph ph-plus me-1"></i>
                            Add
                        </button>
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
                                'label' => 'Email',
                                'class' => 'th-email',
                            ],
                            [
                                'label' => 'Roles',
                                'class' => 'th-roles',
                            ],
                            [
                                'label' => 'Created At',
                                'class' => 'th-created-at',
                            ],
                            [
                                'label' => 'Email Verified At',
                                'class' => 'th-email-verified-at',
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
@include('components.user-managements.users.page-script')
@include('components.user-managements.users.page-style')
