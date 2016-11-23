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
      ->addColumn('tindakan', function( $key ) {
        return '
        <a href="users/' . $key->id . '/edit" class="btn btn-xs btn-primary">Edit</a>

        <form method="POST" action="users/' . $key->id. '">
          '. csrf_field() .'
          <input type="hidden" name="_method" value="DELETE">
          <button type="submit" class="btn btn-danger btn-xs">Delete</button>
        </form>

        ';
      })
      ->make(true);
    }






}
