@section('page-script')
    <script>
        $(document).ready(function () {
            let table = $('#dataTable').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('roles.index') }}",
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
                        data: 'permissions',
                        name: 'permissions'
                    },
                    {
                        data: 'actions',
                        name: 'actions',
                        orderable: false,
                        searchable: false
                    },
                ],
                order: [
                    [1, 'desc']
                ]
            });

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
                            url: "{{ route('roles.destroy', ':id') }}".replace(':id', id),
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
                                notify('error', xhr.responseJSON?.message ?? 'Failed to delete role.');
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
