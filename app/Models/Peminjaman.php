<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    use HasFactory;

    protected $table = 'peminjaman';
    protected $primaryKey = 'id';
    public $timestamps = true;

    protected $fillable = [
        'user_id',
        'kendaraan_id',
        'tanggal_pinjam',
        'tanggal_kembali',
        'status',
        'catatan',
    ];

    // Relasi ke User (peminjam)
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // Relasi ke Kendaraan
    public function kendaraan()
    {
        return $this->belongsTo(Kendaraan::class, 'kendaraan_id');
    }

    // Relasi ke Riwayat
    public function riwayat()
    {
        return $this->hasOne(Riwayat::class, 'peminjaman_id');
    }
}
