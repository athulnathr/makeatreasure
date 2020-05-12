@extends('layouts.app')
@section('heads')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
<link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
<link rel="stylesheet" href="{{URL::to('assets/css/admin_styles.css')}}">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<!-- <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.1/dist/jquery.validate.min.js"></script> -->
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js" defer></script>

<script src="http://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js" defer></script>
<!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script> -->
<!-- <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script> -->
@endsection
@section('content')
<div class="container-fluid ">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Clients</div>

                <div class="card-body">
                    <table class="table table-bordered data-table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>MMID</th>
                                <th>Wallet Address</th>
                                <th width="100px">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('modals')
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalTitle">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="update_form" data-selected-id="">
                    <div class="form-group">
                        <label for="name_field">Name</label>
                        <input type="text" class="form-control" id="name_field" name="name" placeholder="Enter Name">
                    </div>

                    <div class="form-group">
                        <label for="email_field">Email address</label>
                        <input type="email" class="form-control" id="email_field" name="email"
                            placeholder="Enter email">

                    </div>
                    <div class="form-group">
                        <label for="phone_field">Phone</label>
                        <input type="text" class="form-control" id="phone_field" name="phone" placeholder="Enter Phone">

                    </div>
                    <div class="form-group">
                        <label for="mm_id_field">MM ID</label>
                        <input type="text" class="form-control" id="mm_id_field" name="mm_id" placeholder="Enter MMID">

                    </div>
                    <div class="form-group">
                        <label for="wallet_field">Wallet</label>
                        <input type="text" class="form-control" id="wallet_field" name="wallet"
                            placeholder="Enter wallet address">

                    </div>
                    <button type="submit" class="btn btn-primary" id="update_user">Save changes</button>

                </form>
            </div>

        </div>
    </div>
</div>

@endsection

@section('scripts')

<script type="text/javascript">
    $(document).ready(function (e) {

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        var table = $('.data-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('home') }}",
            columns: [{
                    data: 'DT_RowIndex',
                    name: 'DT_RowIndex'
                },
                {
                    data: 'name',
                    name: 'name'
                },
                {
                    data: 'phone',
                    name: 'phone'
                },
                {
                    data: 'email',
                    name: 'email'
                },
                {
                    data: 'mm_id',
                    name: "mm_id"
                },
                {
                    data: 'wallet_id',
                    name: 'wallet_id'
                },
                {
                    data: 'action',
                    name: 'action',
                    orderable: false,
                    searchable: false
                },
            ]
        });

        $(document).on('click', '.edit', function (e) {
            e.preventDefault();
            var id = $(this).attr('data-id');
            if (id !== undefined) {
                $.ajax({
                    type: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    url: "{{route('details')}}",
                    data: {
                        id: id
                    },
                    success: function (data) {
                        var user_data = data.user_data;
                        $('#name_field').val(user_data.name);
                        $('#email_field').val(user_data.email);
                        $('#phone_field').val(user_data.phone);
                        $('#mm_id_field').val(user_data.mm_id);
                        $('#wallet_field').val(user_data.wallet_id);
                        $('#update_form').attr('data-selected-id', user_data.id)
                        $('#editModal').modal('show');
                    },
                    error: function (error) {
                        console.log(error, 'data')
                    }
                });
            }

        })


        $.validator.addMethod('testwallet', function (value) {
            return /^0x[a-fA-F0-9]{40}$/
                .test(value);
        }, 'Please enter a valid wallet address.');

        $.validator.addMethod('testmail', function (value) {
            return /^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/
                .test(value);
        }, 'Please enter a valid email.');

        $('#update_form').validate({
            rules: {
                name: "required",
                phone: {
                    required: true,
                    number: true,
                    minlength: 10,
                    maxlength: 10
                },
                email: {
                    email: true,
                    required: true,
                    testmail: true
                },
                mm_id: {
                    number: true
                },
                wallet: {
                    testwallet: true
                }
            },
            messages: {
                name: "Please enter your name",
                phone: {
                    required: 'Please enter your phone number.',
                    number: 'Please enter a valid number',
                    min: 'Please enter a valid phone number',
                    max: 'Please enter a valid phone number'
                },
                email: {
                    email: 'Please ente a valid email',
                    required: 'An Email id is required for registration'
                },
                wallet: {
                    testmail: 'Please enter a valid wallet address'
                }
            }
        });
        $('#update_form').submit(function (e) {
            e.preventDefault();
            if ($('#update_form').valid()) {
                $.ajax({
                    type: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    url: "{{route('user-update')}}",
                    data: {
                        id: $('#update_form').attr('data-selected-id'),
                        name: $('#name_field').val(),
                        email: $('#email_field').val(),
                        phone: $('#phone_field').val(),
                        mm_id: $('#mm_id_field').val(),
                        wallet_id: $('#wallet_field').val(),
                    },
                    success: function (data) {
                        $('#editModal').modal('hide');
                    },
                    error: function (error) {
                        console.log(error, 'data')
                    }
                });
            }
        })

    })

</script>
@endsection
