@extends('layouts.app')
@section('title', 'Create Role')
@section('content')
    <x-common.breadcrumb :title="'Create Role'"
                         :breadcrumbs="[['label' => 'Dashboard', 'url' => route('dashboard')], ['label' => 'Manage roles', 'url' => route('roles.index')], ['label' => 'Create role']]"/>
    <form action="{{route('roles.store')}}" method="post">
        @csrf
        <div class="card">
            <div class="card-body">
                <div class="mb-3">
                    <label for="name" class="form-label">Role Name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control w-50" id="name" name="name" required>
                </div>
                <h5>Permissions :</h5>
                @foreach($permissions->groupBy('group_name') as $groupName => $groupPermissions)
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-md-2">
                                    <h5 class="mb-0">{{ ucfirst($groupName) }}</h5>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-check d-flex align-items-center">
                                        <input class="form-check-input select-all"
                                               type="checkbox"
                                               style="width: 20px; height: 20px; margin-top: 0;"
                                               data-group="{{ $groupName }}"
                                               id="select-all-{{ $groupName }}">
                                        <label class="form-check-label ms-2 fw-bold mb-0"
                                               for="select-all-{{ $groupName }}">
                                            Select all
                                        </label>
                                    </div>
                                </div>

                                <div class="col-md-7">
                                    <div class="row">
                                        @foreach($groupPermissions as $permission)
                                            <div class="col-md-6 mb-2">
                                                <div class="form-check d-flex align-items-center">
                                                    <input class="form-check-input permission-checkbox"
                                                           type="checkbox"
                                                           style="width: 20px; height: 20px; margin-top: 0;"
                                                           name="permissions[]"
                                                           value="{{ $permission->name }}"
                                                           data-group="{{ $groupName }}"
                                                           id="{{ $groupName }}-{{ $permission->id }}">
                                                    <label class="form-check-label ms-2 mb-0"
                                                           for="{{ $groupName }}-{{ $permission->id }}">
                                                        {{ ucfirst($permission->name) }}
                                                    </label>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                <button type="submit" class="btn btn-secondary">Create</button>
            </div>
        </div>
    </form>


    <script>
        document.addEventListener('DOMContentLoaded', function () {
            document.querySelectorAll('.select-all').forEach(selectAllCheckbox => {
                selectAllCheckbox.addEventListener('change', function () {
                    const group = this.dataset.group;
                    const checkboxes = document.querySelectorAll(`.permission-checkbox[data-group="${group}"]`);
                    checkboxes.forEach(cb => cb.checked = this.checked);
                });
            });

            document.querySelectorAll('.permission-checkbox').forEach(permissionCheckbox => {
                permissionCheckbox.addEventListener('change', function () {
                    const group = this.dataset.group;
                    const checkboxes = document.querySelectorAll(`.permission-checkbox[data-group="${group}"]`);
                    const allChecked = [...checkboxes].every(cb => cb.checked);
                    document.querySelector(`.select-all[data-group="${group}"]`).checked = allChecked;
                });
            });
        });
    </script>

@endsection
