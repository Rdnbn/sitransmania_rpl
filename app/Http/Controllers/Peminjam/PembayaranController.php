<?php

namespace App\Http\Controllers\Peminjam;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PembayaranController extends Controller
{
    public function index()
    {
        return view('peminjam.pembayaran.index');
    }

    public function upload(Request $request)
    {
        return redirect()->back()->with('success', 'Bukti pembayaran berhasil diupload');
    }
}
