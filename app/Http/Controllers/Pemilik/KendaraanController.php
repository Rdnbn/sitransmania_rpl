<?php

namespace App\Http\Controllers\Pemilik;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KendaraanController extends Controller
{
    public function index()
    {
        // $data = Kendaraan::where('pemilik_id', auth()->id())->get();
        return view('pemilik.kendaraan.index'/*, compact('data')*/);
    }

    public function create()
    {
        return view('pemilik.kendaraan.create');
    }

    public function store(Request $request)
    {
        // Validasi & simpan kendaraan
        // Kendaraan::create([...]);

        return redirect()->route('pemilik.kendaraan.index')->with('success', 'Kendaraan berhasil didaftarkan.');
    }

    public function edit($id)
    {
        // $kendaraan = Kendaraan::findOrFail($id);
        return view('pemilik.kendaraan.edit'/*, compact('kendaraan')*/);
    }

    public function update(Request $request, $id)
    {
        // Update kendaraan
        return redirect()->back()->with('success', 'Data kendaraan diperbarui.');
    }

    public function destroy($id)
    {
        // Hapus kendaraan
        return redirect()->back()->with('success', 'Kendaraan dihapus.');
    }

    public function status($id)
    {
        // $kendaraan->status = request('status'); // tersedia/tidak
        return redirect()->back();
    }
}
