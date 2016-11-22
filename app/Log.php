<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
  // Berhubung dengan table files
  protected $table = 'logs';

  // Tetapkan apakah column yang
  // data yang boleh diisi dan diubah suai rekodnya
  // oleh pengguna
  protected $fillable = [

    'file_id',
    'user_id',
    'tarikh_download'

  ];
}
