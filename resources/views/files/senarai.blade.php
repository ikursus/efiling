@extends('layouts.app')

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

@if ( count( $senarai_files ) )

<div class="table-responsive">

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
      <td>
        @if ( count( $key->profileUser ) )
        {{ $key->profileUser->nama }}
        @endif
      </td>
      <td>
        <a class="btn btn-xs btn-info" href="{{ url('files/'.$key->id.'/edit') }}">Edit</a>
        <form method="post" action="{{ url('files') }}/{{ $key->id }}">
          {{ csrf_field() }}
          <input type="hidden" name="_method" value="DELETE">
          <button type="submit" class="btn btn-xs btn-danger">Delete</button>
        </form>
      </td>
    </tr>
    @endforeach

  </tbody>
</table>

</div><!--/table-responsive-->

{{ $senarai_files->links() }}

@endif
</div>
</div>
</div>
</div>
</div>
@endsection
