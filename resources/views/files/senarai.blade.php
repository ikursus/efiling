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

<table class="table">
  <thead>
    <tr>
      <th>ID</th>
      <th>Nama</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>ID</td>
      <td>Nama File</td>
    </tr>
  </tbody>
</table>
</div>
</div>
</div>
</div>
</div>
@endsection
