<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class FilesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      // Query ke table Files
      $senarai_files = DB::table('files')->orderBy('id', 'desc')->get();

      // Paparkan template senarai.blade.php dan sertakan
      // variable $senarai_files
      return view('files/senarai', compact('senarai_files'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('files/borang_tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $data = $request->all();

      dd( $data );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return 'Log File';
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      // Query ke table files untuk dapatkan data berdasarkan ID
      $file = DB::table('files')->where('id', '=', $id)->first();

      return view('files/borang_edit', compact('file') );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      // Dapatkan data daripada borang
      // $data = $request->all();
      $data = $request->only('aktiviti', 'sukuan', 'penggal', 'status_bb');

      // Query ke table files berdasarkan ID dan update rekod
      $file = DB::table('files')->where('id', '=', $id)->update( $data );

      // Redirect user ke halaman senarai files
      return redirect('files');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return 'Data berjaya dihapuskan dari dalam database';
    }
}
