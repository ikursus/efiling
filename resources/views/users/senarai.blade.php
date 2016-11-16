@extends('layouts.app')

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

<table class="table">
  <thead>
    <tr>
      <th>ID</th>
      <th>Nama</th>
      <th>Tindakan</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>1</td>
      <td>Ali Baba</td>
      <td>
        <a class="btn btn-xs btn-info" href="{{ url('users/1/edit') }}">Edit</a>
      </td>
    </tr>
  </tbody>
</table>
</div>
</div>
</div>
</div>
</div>
@endsection
