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

@if ( count( $senarai_users ) )

<table class="table">
  <thead>
    <tr>
      <th>ID</th>
      <th>Username</th>
      <th>Nama</th>
      <th>Email</th>
      <th>Negeri</th>
      <th>Status</th>
      <th>Unit</th>
      <th>Tindakan</th>
    </tr>
  </thead>
  <tbody>

    @foreach ( $senarai_users as $key )
    <tr>
      <td>{{ $key->id }}</td>
      <td>{{ $key->username }}</td>
      <td>{{ $key->nama }}</td>
      <td>{{ $key->email }}</td>
      <td>{{ $key->negeri }}</td>
      <td>{{ $key->status }}</td>
      <td>{{ $key->unit }}</td>
      <td>
        <a class="btn btn-xs btn-info" href="{{ url('users/'.$key->id.'/edit') }}">Edit</a>
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
