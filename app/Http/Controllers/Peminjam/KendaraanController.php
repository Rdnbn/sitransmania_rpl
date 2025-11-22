<?php

namespace App\Http\Controllers\Peminjam;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KendaraanController extends Controller
{
    public function index()
    {
        // $kendaraan = Kendaraan::where('status', 'tersedia')->get();
        return view('peminjam.kendaraan.index');
    }

    public function show($id)
    {
        // $kendaraan = Kendaraan::findOrFail($id);
        return view('peminjam.kendaraan.show');
    }

    public function filter(Request $request)
    {
        // Pencarian kendaraan berdasarkan tipe/harga/asrama
        return view('peminjam.kendaraan.index');
    }

    public function hubungiPemilik($id)
    {
        // Redirect ke chat
        return redirect()->route('peminjam.chat.index', $id);
    }
}
