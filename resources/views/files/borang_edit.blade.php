@extends('layouts.app')

@section('content')
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="panel panel-default">
<div class="panel-heading">Borang Kemaskini File</div>
<div class="panel-body">
<form method="POST" action="{{ url()->current() }}">
  {{ csrf_field() }}

  <div class="form-group">
      <label>File</label>
      <input type="file" name="nama_file">
  </div>

  <div class="form-group">
      <label>Aktiviti</label>
      <select name="aktiviti" class="form-control">
        <option value="kemaskini_lokaliti">Kemaskini Lokaliti</option>
        <option value="belah_bahagi">Belah Bahagi</option>
      </select>
  </div>

  <div class="form-group">
      <label>Tahun</label>
      <select name="tahun" class="form-control">
        <option value="kemaskini_lokaliti">2016</option>
      </select>
  </div>

  <div class="form-group">
      <label>Negeri</label>
      <input type="text" name="negeri" value="Putrajaya" class="form-control" readonly="readonly">
  </div>

  <div class="form-group">
      <label>Sukuan</label>
      <select name="sukuan" class="form-control">
        <option value="s1">S1</option>
        <option value="s2">S2</option>
        <option value="s3">S3</option>
        <option value="dpi">DPI</option>
      </select>
  </div>

  <div class="form-group">
      <label>Penggal</label>
      <select name="sukuan" class="form-control">
        <option value="bp">6 Bulan Pertama</option>
        <option value="bt">6 Bulan Terakhir</option>
      </select>
  </div>

  <div class="form-group">
      <label>Status Belah Bahagi</label>
      <select name="sukuan" class="form-control">
        <option value="sebelum">Sebelum</option>
        <option value="selepas">Selepas</option>
      </select>
  </div>

  <div class="form-group">
    <button type="submit" class="btn btn-primary">
        Kemaskini File
    </button>
  </div>
</form>
</div>
</div>
</div>
</div>
</div>
@endsection
