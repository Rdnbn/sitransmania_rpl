<?php

namespace App\Http\Controllers;

use App\Models\Kendaraan;
use App\Models\User;
use App\Models\Peminjaman;

class LandingController extends Controller
{
    public function index()
    {
        return view('landing.index', [
            'totalKendaraan'   => Kendaraan::count(),
            'totalPengguna'    => User::count(),
            'transaksiHariIni' => Peminjaman::whereDate('created_at', today())->count(),
        ]);
    }
    public function beranda() {
        return view('landing.beranda');
    }

    public function tentang() {
        return view('landing.tentang');
    }

    public function layanan() {
        return view('landing.layanan');
    }

    public function kontak() {
        return view('landing.kontak');
    }
}
