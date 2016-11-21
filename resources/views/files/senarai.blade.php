@extends('layouts.app')

@section('content')
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="panel panel-default">
<div class="panel-heading">Senarai Files</div>
<div class="panel-body">

  <p>
  <a href="{{ url('files/tambah') }}" class="btn btn-primary">Upload File</a>
  </p>

@if ( count( $senarai_files ) )
<table class="table">

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
      <th>Tindakan</th>
    </tr>
  </thead>

  <tbody>

    @foreach ( $senarai_files as $key )
    <tr>
      <td>{{ $key->id }}</td>
      <td>{{ $key->negeri }}</td>
      <td>{{ $key->tahun }}</td>
      <td>{{ $key->aktiviti }}</td>
      <td>{{ $key->sukuan }}</td>
      <td>{{ ucwords( $key->penggal ) }}</td>
      <td>{{ ucwords( $key->status_bb ) }}</td>
      <td>
        <a href="{{ $key->nama_file }}">{{ $key->nama_display }}</a>
      </td>
      <td>{{ $key->user_id }}</td>
      <td>
        <a class="btn btn-xs btn-info" href="{{ url('files/'.$key->id.'/edit') }}">Edit</a>
        <a class="btn btn-xs btn-danger" href="#">Hapus</a>
      </td>
    </tr>
    @endforeach

  </tbody>
</table>

@endif
</div>
</div>
</div>
</div>
</div>
@endsection
