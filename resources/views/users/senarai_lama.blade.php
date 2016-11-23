@extends('layouts.app')

@section('header')
<link href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">
<script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
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

        <form method="post" action="{{ url('users') }}/{{ $key->id }}">
          {{ csrf_field() }}
          <input type="hidden" name="_method" value="DELETE">
          <button type="submit" class="btn btn-xs btn-danger">Delete</button>
        </form>

      </td>
    </tr>
    @endforeach

  </tbody>
</table>


{{ $senarai_users->links() }}

@endif


</div>
</div>
</div>
</div>
</div>
@endsection
