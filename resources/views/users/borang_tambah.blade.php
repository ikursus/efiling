@extends('layouts.app')

@section('content')
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="panel panel-default">
<div class="panel-heading">Borang Tambah User</div>
<div class="panel-body">

@include('layouts.errors')

<form method="POST" action="{{ url('/users/tambah') }}">

  {{ csrf_field() }}

  <div class="form-group">
      <label>Username</label>
      <input type="text" name="username" class="form-control">
  </div>

  <div class="form-group">
      <label>Email</label>
      <input type="email" name="email" class="form-control">
  </div>

  <div class="form-group">
      <label>Password</label>
      <input type="password" name="password" class="form-control">
  </div>

  <div class="form-group">
      <label>Nama</label>
      <input type="text" name="nama" class="form-control">
  </div>

  <div class="form-group">
      <label>Telefon</label>
      <input type="text" name="phone" class="form-control">
  </div>

  <div class="form-group">
      <label>Status</label>
      <select name="status" class="form-control">
        <option value="administrator">Administrator</option>
        <option value="user">User</option>
      </select>
  </div>

  <div class="form-group">
      <label>Negeri</label>
      <input type="text" name="negeri" class="form-control">
  </div>

  <div class="form-group">
      <label>Unit</label>
      <input type="text" name="unit" class="form-control">
  </div>

  <div class="form-group">
    <button type="submit" class="btn btn-primary">
        Simpan Data
    </button>
  </div>
</form>
</div>
</div>
</div>
</div>
</div>
@endsection
