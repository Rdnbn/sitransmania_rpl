<?php

namespace App\Http\Controllers\Peminjam;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Statistik peminjaman peminjam
        // $totalPeminjaman = Peminjaman::where('peminjam_id', auth()->id())->count();

        return view('peminjam.dashboard.index', [
            // 'totalPeminjaman' => $totalPeminjaman
        ]);
    }

    public function notifikasi()
    {
        // Notifikasi peminjaman, pesan, pembayaran
        return view('peminjam.dashboard.notifikasi');
    }

    public function riwayat()
    {
        // $riwayat = Peminjaman::where('peminjam_id', auth()->id())->get();

        return view('peminjam.dashboard.riwayat');
    }

    public function akun()
    {
        return view('peminjam.dashboard.akun');
    }
}
