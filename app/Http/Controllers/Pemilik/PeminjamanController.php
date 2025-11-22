<?php

namespace App\Http\Controllers\Pemilik;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PeminjamanController extends Controller
{
    public function index()
    {
        // Peminjaman aktif & riwayat
        return view('pemilik.peminjaman.index');
    }

    public function show($id)
    {
        // Detail transaksi
        return view('pemilik.peminjaman.show');
    }

    public function liveMap($id)
    {
        // Menampilkan lokasi real-time
        return view('pemilik.peminjaman.live-map');
    }

    public function updateStatus(Request $request, $id)
    {
        // Setujui / tolak / selesai
        return back()->with('success', 'Status peminjaman diperbarui.');
    }
}
