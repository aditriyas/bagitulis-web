@extends('layouts.master')

@section('content')
  <div id="page-content-wrapper">
    <nav class="navbar navbar-store navbar-expand-lg navbar-light fixed-top" data-aos="fade-down">
      <button class="btn btn-secondary d-md-none mr-auto mr-2" id="menu-toggle">
        &laquo; Menu
      </button>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </nav>

    <div class="section-content section-dashboard-home" data-aos="fade-up">
      <div class="container-fluid">
        <div class="dashboard-heading">
          <h2 class="dashboard-title">Users Management</h2>
          {{-- <p class="dashboard-subtitle">Manage Your Writings & Uploads</p> --}}
        </div>
        <div class="dashboard-content">
          <div class="row mt-5">
            <div class="col-lg-12">
                <table class="table table-striped" id="table-users">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->role }}</td>
                                <td class="text-center">
                                    <button type="button" class="btn btn-warning btn-edit">Edit</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
   <!-- Modal -->
    <div class="modal fade" id="modalEdit" data-backdrop="false" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Users</h5>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12">
                        <form action="{{ route('admin.users.update') }}" method="post" id="form-update">
                            @csrf
                            @method('put')
                            <input type="hidden" name="id">
                            <div class="form-group">
                                <input type="text"class="form-control" name="name" placeholder="Nama" required>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" placeholder="Email" readonly>
                            </div>
                            <div class="form-group">
                                <select class="form-control" name="role">
                                    <option selected disabled>- role -</option>
                                    <option value='member'>Member</option>
                                    <option value='admin'>Admin</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Password</label><small class="text-muted">(Opsional)</small>
                                <input type="password" class="form-control" name="password">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="btn-submit">Save changes</button>
            </div>
        </div>
        </div>
    </div>
@endsection

@push('css')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.25/datatables.min.css"/>
@endpush

@push('js')
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.25/datatables.min.js"></script>
    <script>
        $(document).ready(function () {
            var table = $('#table-users').DataTable();

            // get user data
            $("#table-users tbody").on('click', '.btn-edit', function () {
                var data = table.row($(this).parents('tr')).data();
                console.log(data);
                $("input[name='id']").val(data[0]);
                $("input[name='name']").val(data[1]);
                $("input[name='email']").val(data[2]);
                $("select[name='role']").val(data[3]);

                $("#modalEdit").modal('show')
            });

            $('#btn-submit').on('click', function () {
                $('#form-update').submit();
            });
        });
    </script>
@endpush

