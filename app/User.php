<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    // Kalau nama table tak sama dengan nama Class Model,
    // makluman kepada Class Model untuk berhubung dengan
    // maklumat table yang ditetapkan di sini.
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username',
        'nama',
        'email',
        'password',
        'phone',
        'status',
        'negeri',
        'unit'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
