<?php
// Route paparan halaman utama
Route::get('/', function () {
    // laravel cari folder resources/views/welcome.blade.php
    return view('welcome');
});

// Route login dan password reset
// Generated oleh Laravel php artisan make:auth
Auth::routes();

// Route paparan halaman dashboard
Route::get('/dashboard', 'HomeController@index');

// Cara penggunaan routes yang mempunyai prefix
// yang sama (contoh: users) tanpa menggunakan Route::group()
// http://sistemdata.dev/users
// Route::get('users', function() {
//   echo 'Senarai users';
// });

// http://sistemdata.dev/users/tambah
// Route::get('users/tambah', function() {
//   echo 'Halaman borang tambah user';
// });


// Routes group untuk prefix users
Route::group(['prefix' => 'users'], function() {

    // Papar senarai users bagi alamat http://sistemdata.dev/users
    Route::get('/', function() {
      // Paparkan fail template bernama senarai.php dari
      // folder resources/views/users

      $username = '<strong>Ali</strong>';

      // return view('users/senarai', array('username' => 'Ali') );
      return view('users/senarai', compact('username') );
    });

    // Papar borang tambah users bagi alamat http://sistemdata.dev/users/tambah
    Route::get('tambah', function() {
      return view('users/borang_tambah');
    });

    // Terima data dari HTTP POST dari alamat http://sistemdata.dev/users/tambah
    Route::post('tambah', function() {
      return 'Proses data simpan ke database';
    });

    // Papar borang edit users bagi alamat http://sistemdata.dev/users/{id}/edit
    Route::get('{id}/edit', function($id) {
      return view('users/borang_edit');
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


// Routes group untuk prefix files
Route::group(['prefix' => 'files'], function() {

    // Papar senarai files bagi alamat http://sistemdata.dev/files
    Route::get('/', function() {
      // Paparkan fail template bernama senarai.php dari
      // folder resources/views/files
      return view('files/senarai');
    });

    // Papar borang tambah file bagi alamat http://sistemdata.dev/files/tambah
    Route::get('tambah', function() {
      return view('files/borang_tambah');
    });

    // Terima data dari HTTP POST dari alamat http://sistemdata.dev/files/tambah
    Route::post('tambah', function() {
      return 'Proses data simpan ke database';
    });

    // Papar borang edit files bagi alamat http://sistemdata.dev/files/{id}/edit
    Route::get('{id}/edit', function($id) {
      return view('files/borang_edit');
    });

    // Terima data dari HTTP POST dari alamat http://sistemdata.dev/files/{id}/edit
    // Untuk kemaskini data berdasarkan ID
    Route::patch('{id}/edit', function($id) {
      return 'Update data file ' . $id;
    });

    // Hapus rekod user daripada database berdasarkan
    // alamat http://sistemdata.dev/files/{id}
    Route::delete('{id}', function($id) {
      return 'Berjaya delete file ' . $id;
    });

});
