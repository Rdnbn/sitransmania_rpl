<?php

namespace App\Http\Controllers\Pemilik;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PembayaranController extends Controller
{
    public function index()
    {
        // $data = Pembayaran::where('pemilik_id', auth()->id())->get();
        return view('pemilik.pembayaran.index');
    }

    public function show($id)
    {
        // Detail pembayaran + bukti transfer
        return view('pemilik.pembayaran.show');
    }

    public function konfirmasi(Request $request, $id)
    {
        // Ubah status pembayaran (dibayar / ditolak)
        return back()->with('success', 'Pembayaran berhasil dikonfirmasi.');
    }

    public function riwayat()
    {
        return view('pemilik.pembayaran.riwayat');
    }
}
