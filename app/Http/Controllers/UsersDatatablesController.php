<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Datatables;
use App\User;

class UsersDatatablesController extends Controller
{
    public function index()
    {
      return view('users/senarai', compact('senarai_users') );
    }

    public function datatables()
    {
      $senarai_users = User::select('id', 'username', 'nama', 'email', 'negeri', 'status', 'unit');

      return Datatables::of( $senarai_users )
      ->make(true);
    }
}
