<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notifikasi extends Model
{
    use HasFactory;

    protected $table = 'notifikasi';
    protected $primaryKey = 'id';
    public $timestamps = true;

    protected $fillable = [
        'user_id',
        'judul',
        'pesan',
        'status',
        'tanggal',
    ];

    // Relasi: satu notifikasi dimiliki oleh satu user
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
