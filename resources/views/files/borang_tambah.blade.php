@extends('layouts.app')

@section('content')
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="panel panel-default">
<div class="panel-heading">Borang Tambah File</div>
<div class="panel-body">

  @include('layouts.errors')

<form method="POST" action="{{ url()->current() }}" enctype="multipart/form-data">
  {{ csrf_field() }}

  <div class="form-group">
      <label>File</label>
      <input type="file" name="nama_file">
  </div>

  <div class="form-group">
      <label>Nama Display</label>
      <input type="text" name="nama_display" class="form-control" placeholder="Nama Display File">
  </div>


  <div class="form-group">
      <label>Aktiviti</label>
      <select name="aktiviti" class="form-control">
        <option value="KL">Kemaskini Lokaliti</option>
        <option value="BB">Belah Bahagi</option>
      </select>
  </div>

  <div class="form-group">
      <label>Tahun</label>
      <select name="tahun" class="form-control">
        <option value="2016">2016</option>
      </select>
  </div>

  <div class="form-group">
      <label>Negeri</label>
      <input type="text" name="negeri" value="Putrajaya" class="form-control" readonly="readonly">
  </div>

  <div class="form-group">
      <label>Sukuan</label>
      <select name="sukuan" class="form-control">
        <option value="S1">S1</option>
        <option value="S2">S2</option>
        <option value="S3">S3</option>
        <option value="DPI">DPI</option>
      </select>
  </div>

  <div class="form-group">
      <label>Penggal</label>
      <select name="penggal" class="form-control">
        <option value="P1">Penggal 1</option>
        <option value="P2">Penggal 2</option>
      </select>
  </div>

  <div class="form-group">
      <label>Status Belah Bahagi</label>
      <select name="status_bb" class="form-control">
        <option value="SBLM">Sebelum</option>
        <option value="SLPS">Selepas</option>
      </select>
  </div>

  <div class="form-group">
    <button type="submit" class="btn btn-primary">
        Upload File
    </button>
  </div>
</form>
</div>
</div>
</div>
</div>
</div>
@endsection
