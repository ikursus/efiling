@extends('layouts.app')

@section('header')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs-3.3.6/jqc-1.12.3/pdfmake-0.1.18/dt-1.10.12/af-2.1.2/b-1.2.2/b-colvis-1.2.2/b-html5-1.2.2/b-print-1.2.2/cr-1.3.2/fc-3.2.2/fh-3.1.2/kt-2.1.3/r-2.1.0/rr-1.1.2/sc-1.4.2/se-1.2.0/datatables.min.css"/>
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
<script type="text/javascript" src="https://cdn.datatables.net/v/bs-3.3.6/jqc-1.12.3/pdfmake-0.1.18/dt-1.10.12/af-2.1.2/b-1.2.2/b-colvis-1.2.2/b-html5-1.2.2/b-print-1.2.2/cr-1.3.2/fc-3.2.2/fh-3.1.2/kt-2.1.3/r-2.1.0/rr-1.1.2/sc-1.4.2/se-1.2.0/datatables.min.js"></script>
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
