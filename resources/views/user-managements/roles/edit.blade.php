@extends('layouts.app')

@section('title', 'Edit Role')

@section('content')
    <x-common.breadcrumb :title="'Edit Role'"
                         :breadcrumbs="[['label' => 'Dashboard', 'url' => route('dashboard')], ['label' => 'Manage Roles', 'url' => route('roles.index')], ['label' => 'Edit Role']]"/>

    <form action="{{ route('roles.update', $role->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="card">
            <div class="card-body">
                {{-- Role Name --}}
                <div class="mb-3">
                    <label for="name" class="form-label">Role Name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control w-50" id="name" name="name"
                           value="{{ old('name', $role->name) }}" required>
                </div>

                {{-- Permissions --}}
                <h5>Permissions :</h5>
                @foreach($permissions->groupBy('group_name') as $groupName => $groupPermissions)
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-md-2">
                                    <h6 class="mb-0">{{ ucfirst($groupName) }}</h6>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-check d-flex align-items-center">
                                        <input class="form-check-input select-all"
                                               type="checkbox"
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
                                                           name="permissions[]"
                                                           value="{{ $permission->name }}"
                                                           data-group="{{ $groupName }}"
                                                           id="{{ $groupName }}-{{ $permission->id }}"
                                                        {{ in_array($permission->name, old('permissions', $role->permissions->pluck('name')->toArray())) ? 'checked' : '' }}>
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

                <button type="submit" class="btn btn-secondary">Update</button>
            </div>
        </div>
    </form>

    {{-- JS for "Select All" functionality --}}
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            document.querySelectorAll('.select-all').forEach(selectAllCheckbox => {
                const group = selectAllCheckbox.dataset.group;
                const checkboxes = document.querySelectorAll(`.permission-checkbox[data-group="${group}"]`);

                // Set initial state for "Select All"
                selectAllCheckbox.checked = [...checkboxes].every(cb => cb.checked);

                selectAllCheckbox.addEventListener('change', function () {
                    checkboxes.forEach(cb => cb.checked = this.checked);
                });
            });

            // Update "Select All" state when individual checkboxes are clicked
            document.querySelectorAll('.permission-checkbox').forEach(permissionCheckbox => {
                permissionCheckbox.addEventListener('change', function () {
                    const group = this.dataset.group;
                    const checkboxes = document.querySelectorAll(`.permission-checkbox[data-group="${group}"]`);
                    document.querySelector(`.select-all[data-group="${group}"]`).checked =
                        [...checkboxes].every(cb => cb.checked);
                });
            });
        });
    </script>
@endsection
