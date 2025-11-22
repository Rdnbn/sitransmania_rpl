<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kendaraan extends Model
{
    use HasFactory;

    protected $table = 'kendaraan'; // nama tabel di database kamu
    protected $primaryKey = 'id';   // kunci utama
    public $timestamps = true;      // kalau tabel kamu pakai created_at & updated_at

    protected $fillable = [
        'nama_kendaraan',
        'tipe',
        'plat_nomor',
        'status',
        // tambahkan semua kolom yang kamu punya di tabel ini
    ];
}
