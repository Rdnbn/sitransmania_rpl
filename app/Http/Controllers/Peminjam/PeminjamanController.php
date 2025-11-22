<?php

namespace App\Http\Controllers\Peminjam;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PeminjamanController extends Controller
{
    public function create($kendaraan_id)
    {
        // Form peminjaman
        return view('peminjam.peminjaman.create', compact('kendaraan_id'));
    }

    public function store(Request $request)
    {
        // Validasi & simpan data peminjaman
        // Peminjaman::create([...]);

        return redirect()->route('peminjam.pembayaran.index')
            ->with('success', 'Peminjaman berhasil dibuat, lanjut ke pembayaran.');
    }

    public function batal($id)
    {
        // Update status menjadi dibatalkan
        return back()->with('success', 'Peminjaman berhasil dibatalkan.');
    }

    public function detail($id)
    {
        // Detail peminjaman (status, waktu, lokasi)
        return view('peminjam.peminjaman.detail');
    }
}
