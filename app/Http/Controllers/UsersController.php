<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
      $username = '<strong>Ali</strong>';

      // return view('users/senarai', array('username' => 'Ali') );
      return view('users/senarai', compact('username') );
    }

    public function create()
    {
      return view('users/borang_tambah');
    }

    public function store()
    {
      return 'Data berjaya disimpan ke database!';
    }

    public function edit()
    {
      return view('users/borang_edit');
    }

    public function update()
    {
      return 'Data berjaya dikemaskini ke database!';
    }

    public function destroy()
    {
      return 'Data berjaya dihapuskan dari database!';
    }
}
