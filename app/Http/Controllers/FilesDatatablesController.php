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
      ->make(true);
    }
}
