<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = 'users';

    protected $primaryKey = 'id_user';

    public $timestamps = false;

    protected $fillable = [
    'nama_lengkap',
    'email',
    'password',
    'no_telepon',
    'role',
    'last_login_at',
];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
    'last_login_at' => 'datetime',
];

}