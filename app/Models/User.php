<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'users';
    protected $primaryKey = 'id_user';  // <-- INI YANG BELUM ADA
    public $incrementing = true;
    protected $keyType = 'int';
    public $timestamps = true;

    protected $fillable = [
        'nama',
        'email',
        'password',
        'no_telp',
        'role',
        'jenis_kelamin',
        'asrama',
        'kamar',
        'prodi',
        'angkatan',
        'foto_profil',
        'status_akun',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
}
