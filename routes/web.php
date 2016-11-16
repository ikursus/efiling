<?php
// Route paparan halaman utama
Route::get('/', 'HomeController@index');

// Route login dan password reset
// Generated oleh Laravel php artisan make:auth
Auth::routes();

// Route paparan halaman dashboard
Route::get('/dashboard', 'HomeController@dashboard');

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
    Route::get('/', 'UsersController@index');

    // Papar borang tambah users bagi alamat http://sistemdata.dev/users/tambah
    Route::get('tambah', 'UsersController@create');

    // Terima data dari HTTP POST dari alamat http://sistemdata.dev/users/tambah
    Route::post('tambah', 'UsersController@store');

    // Papar borang edit users bagi alamat http://sistemdata.dev/users/{id}/edit
    Route::get('{id}/edit', 'UsersController@edit');

    // Terima data dari HTTP POST dari alamat http://sistemdata.dev/users/{id}/edit
    // Untuk kemaskini data berdasarkan ID
    Route::patch('{id}/edit', 'UsersController@update');

    // Hapus rekod user daripada database berdasarkan
    // alamat http://sistemdata.dev/users/{id}
    Route::delete('{id}', 'UsersController@destroy');

});


// Routes group untuk prefix files
Route::group(['prefix' => 'files'], function() {

    // Papar senarai files bagi alamat http://sistemdata.dev/files
    Route::get('/', 'FilesController@index');

    // Papar borang tambah file bagi alamat http://sistemdata.dev/files/tambah
    Route::get('tambah', 'FilesController@create');

    // Terima data dari HTTP POST dari alamat http://sistemdata.dev/files/tambah
    Route::post('tambah', 'FilesController@store');

    // Papar borang edit files bagi alamat http://sistemdata.dev/files/{id}/edit
    Route::get('{id}/edit', 'FilesController@edit');

    // Terima data dari HTTP POST dari alamat http://sistemdata.dev/files/{id}/edit
    // Untuk kemaskini data berdasarkan ID
    Route::patch('{id}/edit', 'FilesController@update');

    // Paparkan rekod log fails
    Route::get('{id}/logs', 'FilesController@show');

    // Hapus rekod user daripada database berdasarkan
    // alamat http://sistemdata.dev/files/{id}
    Route::delete('{id}', 'FilesController@destroy');

});
