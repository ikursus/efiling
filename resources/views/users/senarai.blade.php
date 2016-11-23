@extends('layouts.app')

@section('header')
<link href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">
@endsection


@section('content')
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="panel panel-default">
<div class="panel-heading">Senarai Users</div>
<div class="panel-body">

<p>
<a href="{{ url('users/tambah') }}" class="btn btn-primary">Tambah User</a>
</p>

<table class="table" id="users-table">

  <thead>

    <tr>
      <th>ID</th>
      <th>Username</th>
      <th>Nama</th>
      <th>Email</th>
      <th>Negeri</th>
      <th>Status</th>
      <th>Unit</th>
    </tr>

  </thead>

</table>


</div>
</div>
</div>
</div>
</div>
@endsection

@section('footer')
<script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
<script>
$(function() {
    $('#users-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{!! route('datatables.users') !!}',
        columns: [
            { data: 'id', name: 'id' },
            { data: 'username', name: 'username' },
            { data: 'nama', name: 'nama' },
            { data: 'email', name: 'email' },
            { data: 'negeri', name: 'negeri' },
            { data: 'status', name: 'status' },
            { data: 'unit', name: 'unit' },
        ]
    });
});
</script>
@endsection
