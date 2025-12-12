@section('page-script')
    <script>
        $(document).ready(function () {
            let table = $('#dataTable').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('users.index') }}",
                columns: [{
                    data: 'DT_RowIndex',
                    name: 'DT_RowIndex',
                    orderable: false,
                    searchable: false
                },
                    {
                        data: 'name',
                        name: 'name'
                    },
                    {
                        data: 'email',
                        name: 'email'
                    },
                    {
                        data: 'roles',
                        name: 'roles'
                    },
                    {
                        data: 'created_at',
                        name: 'created_at'
                    },
                    {
                        data: 'email_verified_at',
                        name: 'email_verified_at'
                    },
                    {
                        data: 'actions',
                        name: 'actions',
                        orderable: false,
                        searchable: false
                    },
                ],
                order: [
                    [4, 'desc']
                ]
            });

            $(document).off('click', '#addUserBtn').on('click', '#addUserBtn', function () {
                $('#loader').show();
                $.get("{{ route('users.create') }}", function (response) {
                    console.log(response);
                    $('#commonModal .modal-content').html(response);
                    $('#commonModal').modal('show');
                }).fail(function (xhr) {
                    notify('error', xhr.responseJSON?.message ?? 'Failed to load form.');
                }).always(function () {
                    $('#loader').hide();
                })
            });

            $(document).on('submit', '#addEditUserForm', function (e) {
                e.preventDefault();
                $.ajax({
                    type: "POST",
                    data: new FormData(this),
                    url: $(this).attr('action'),
                    processData: false,
                    contentType: false,
                    beforeSend: function () {
                        $('#submitBtn').prop('disabled', true).html(`<span class="spinner-border spinner-border-sm me-2" role="status" aria-hidden="true"></span>
        Please wait...`);
                    },
                    success: function (response) {
                        if (response.status == 'success') {
                            $('#addEditUserForm').trigger('reset');
                            $('#commonModal').modal('hide');
                            table.ajax.reload(null, false);
                            notify('success', response.message || 'User added successfully!');
                        }
                    },
                    error: function (xhr) {
                        if (xhr.status === 422) {
                            let errors = xhr.responseJSON.errors;
                            for (let field in errors) {
                                notify('error', errors[field][0]);
                            }
                        } else {
                            notify("error", "An error occurred. Please try again.");
                        }
                    },
                    complete: function () {
                        $('#submitBtn').prop('disabled', false).html('Save');
                    }
                })
            })

            $(document).off('click', '.editUserBtn').on('click', '.editUserBtn', function () {
                let id = $(this).data('id');
                $('#loader').show();
                $.get("{{ route('users.edit', ':id') }}".replace(':id', id), function (response) {
                    $('#commonModal .modal-content').html(response);
                    $('#commonModal').modal('show');
                }).fail(function (xhr) {
                    notify('error', xhr.responseJSON?.message ?? 'Failed to load form.');
                }).always(function () {
                    $('#loader').hide();
                })
            })


            $(document).on('click', '.delete', function () {
                let id = $(this).data('id');

                Swal.fire({
                    title: "Are you sure?",
                    text: "You won't be able to revert this!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#d33",
                    cancelButtonColor: "#000",
                    confirmButtonText: "Yes, delete it!"
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            type: "DELETE",
                            url: "{{ route('users.destroy', ':id') }}".replace(':id', id),
                            data: {
                                _token: "{{ csrf_token() }}"
                            },
                            beforeSend: function () {
                                $('#loader').show();
                            },
                            success: function (response) {
                                if (response.status === 'success') {
                                    notify('success', response.message);
                                    table.ajax.reload(null, false);
                                } else {
                                    notify('error', response.message ?? 'Something went wrong!');
                                }
                            },
                            error: function (xhr) {
                                notify('error', xhr.responseJSON?.message ?? 'Failed to delete user.');
                            },
                            complete: function () {
                                $('#loader').hide();
                            }
                        });
                    }
                });
            });
        });
    </script>
@endsection
