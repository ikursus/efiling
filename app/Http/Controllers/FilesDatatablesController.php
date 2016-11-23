<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Datatables;
use App\User;
use App\File;

class FilesDatatablesController extends Controller
{
    public function index()
    {
      return view('files/senarai', compact('senarai_files') );
    }

    public function datatables()
    {
      $senarai_files = File::select('id', 'negeri', 'tahun', 'aktiviti', 'sukuan', 'penggal', 'status_bb', 'nama_file', 'user_id');

      return Datatables::of( $senarai_files )
      ->addColumn('tindakan', function( $key ) {
        return '
        <a href="files/' . $key->id . '/edit" class="btn btn-xs btn-primary">Edit</a>

        <form method="POST" action="files/' . $key->id. '">
          '. csrf_field() .'
          <input type="hidden" name="_method" value="DELETE">
          <button type="submit" class="btn btn-danger btn-xs">Delete</button>
        </form>

        ';
      })
      ->editColumn('user_id', function ($file) {
          return $file->profileUser->nama;
      })
      ->make(true);
    }
}
