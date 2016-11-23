@extends('layouts.app')

@section('header')
<link href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">
@endsection

@section('content')
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="panel panel-default">
<div class="panel-heading">Senarai Files</div>
<div class="panel-body">

@include('layouts.errors')

  <p>
  <a href="{{ url('files/tambah') }}" class="btn btn-primary">Upload File</a>
  </p>

<div class="table-responsive">

<table class="table" id="files-table">

  <thead>
    <tr>
      <th>ID</th>
      <th>Negeri</th>
      <th>Tahun</th>
      <th>Aktiviti</th>
      <th>Sukuan</th>
      <th>Penggal</th>
      <th>Status B/B</th>
      <th>Nama File</th>
      <th>User</th>
    </tr>
  </thead>
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
    $('#files-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{!! url("files/datatables") !!}',
        columns: [
            { data: 'id', name: 'id' },
            { data: 'negeri', name: 'negeri' },
            { data: 'tahun', name: 'tahun' },
            { data: 'aktiviti', name: 'aktiviti' },
            { data: 'sukuan', name: 'sukuan' },
            { data: 'penggal', name: 'penggal' },
            { data: 'status_bb', name: 'status_bb' },
            { data: 'nama_file', name: 'nama_file' },
            { data: 'user_id', name: 'user_id' },
        ]
    });
});
</script>
@endsection
