<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    use HasFactory;

    protected $table = 'chat';
    protected $primaryKey = 'id';
    public $timestamps = true;

    protected $fillable = [
        'pengirim_id',
        'penerima_id',
        'pesan',
        'status',
        'waktu',
    ];

    // Relasi ke User (pengirim)
    public function pengirim()
    {
        return $this->belongsTo(User::class, 'pengirim_id');
    }

    // Relasi ke User (penerima)
    public function penerima()
    {
        return $this->belongsTo(User::class, 'penerima_id');
    }
}
