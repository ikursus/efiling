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

    public function store( Request $request )
    {
      // Lakukan validation terhadap input dari borang
      // Format code $this->validate( $request, $array_rules );
      $this->validate( $request, [
        'username' => 'required|min:3',
        'email' => 'required|email',
        'nama' => 'required',
        'status' => 'required|in:administrator,user',
        'negeri' => 'required',
        'unit' => 'required'
      ] );

      // Dapatkan KESEMUA data dari borang
      $data = $request->all();

      // Paparkan data dalam bentuk array
      // return  $data;
      dd($data);
    }

    public function edit()
    {
      return view('users/borang_edit');
    }

    public function update( Request $request )
    {
      $this->validate( $request, [
        'username' => 'required|min:3',
        'email' => 'required|email',
        'nama' => 'required',
        'status' => 'required|in:administrator,user',
        'negeri' => 'required',
        'unit' => 'required'
      ] );
      
      // Dapatkan KESEMUA data dari borang
      $data = $request->all();

      // Paparkan data dalam bentuk array (cara 1)
      // return $data;
      // Paparkan data dalam bentuk array (cara 2)
      // print_r( $data );
      // Paparkan data dalam bentuk array (cara 3)
      dd( $data );
    }

    public function destroy($id)
    {
      return 'Data berjaya dihapuskan dari database!';
    }
}
