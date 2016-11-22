<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    // Berhubung dengan table files
    protected $table = 'files';

    // Tetapkan apakah column yang
    // data yang boleh diisi dan diubah suai rekodnya
    // oleh pengguna
    protected $fillable = [

      'nama_display',
      'nama_file',
      'tahun',
      'negeri',
      'penggal',
      'aktiviti',
      'sukuan',
      'status_bb',
      'user_id'

    ];
}
