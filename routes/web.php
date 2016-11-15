<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('testing', function () {
    echo 'testing';
});

Auth::routes();

Route::get('/home', 'HomeController@index');


// http://sistemdata.dev/users
// Route::get('users', function() {
//   echo 'Senarai users';
// });

// http://sistemdata.dev/users/tambah
// Route::get('users/tambah', function() {
//   echo 'Halaman borang tambah user';
// });


// Routes untuk pengurusan users
Route::group(['prefix' => 'users'], function() {

    // Papar senarai users bagi alamat http://sistemdata.dev/users
    Route::get('/', function() {
      return 'Senarai Users';
    });

    // Papar borang tambah users bagi alamat http://sistemdata.dev/users/tambah
    Route::get('tambah', function() {
      return 'Halaman Borang Tambah User';
    });

    // Terima data dari HTTP POST dari alamat http://sistemdata.dev/users/tambah
    Route::post('tambah', function() {
      return 'Proses data simpan ke database';
    });

    // Papar borang edit users bagi alamat http://sistemdata.dev/users/{id}/edit
    Route::get('{id}/edit', function($id) {
      return 'Halaman Borang Edit User ' . $id;
    });

    // Terima data dari HTTP POST dari alamat http://sistemdata.dev/users/{id}/edit
    // Untuk kemaskini data berdasarkan ID
    Route::patch('{id}/edit', function($id) {
      return 'Update data user ' . $id;
    });

    // Hapus rekod user daripada database berdasarkan
    // alamat http://sistemdata.dev/users/{id}
    Route::delete('{id}', function($id) {
      return 'Berjaya delete user ' . $id;
    });

});
