@extends('layouts.app')

@section('header')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs-3.3.6/jqc-1.12.3/pdfmake-0.1.18/dt-1.10.12/af-2.1.2/b-1.2.2/b-colvis-1.2.2/b-html5-1.2.2/b-print-1.2.2/cr-1.3.2/fc-3.2.2/fh-3.1.2/kt-2.1.3/r-2.1.0/rr-1.1.2/sc-1.4.2/se-1.2.0/datatables.min.css"/>
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
<script type="text/javascript" src="https://cdn.datatables.net/v/bs-3.3.6/jqc-1.12.3/pdfmake-0.1.18/dt-1.10.12/af-2.1.2/b-1.2.2/b-colvis-1.2.2/b-html5-1.2.2/b-print-1.2.2/cr-1.3.2/fc-3.2.2/fh-3.1.2/kt-2.1.3/r-2.1.0/rr-1.1.2/sc-1.4.2/se-1.2.0/datatables.min.js"></script>
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
