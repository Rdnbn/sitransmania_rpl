<?php

namespace App\Http\Controllers\Pemilik;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Data statistik pemilik (jumlah kendaraan, peminjaman aktif, dll)
        // $kendaraan = Kendaraan::where('pemilik_id', auth()->id())->count();
        // $peminjaman = Peminjaman::where('pemilik_id', auth()->id())->where('status', 'dipinjam')->count();
        return view('pemilik.dashboard', [
            // 'kendaraan' => $kendaraan,
            // 'peminjaman' => $peminjaman,
        ]);
    }

    public function notifikasi()
    {
        // Notifikasi (pesan, peminjaman, pembayaran)
        return view('pemilik.dashboard.notifikasi');
    }
}
