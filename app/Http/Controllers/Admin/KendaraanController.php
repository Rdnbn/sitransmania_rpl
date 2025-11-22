<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Kendaraan;
use Illuminate\Http\Request;

class KendaraanController extends Controller
{
    public function index()
    {
        return view('admin.kendaraan.index', [
            'kendaraan' => Kendaraan::with('pemilik')->get()
        ]);
    }

    public function create()
    {
        return view('admin.kendaraan.create');
    }

    public function store(Request $request)
    {
        Kendaraan::create($request->all());

        return redirect()->back()->with('success', 'Kendaraan berhasil ditambahkan');
    }

    public function edit($id)
    {
        return view('admin.kendaraan.edit', [
            'kendaraan' => Kendaraan::findOrFail($id)
        ]);
    }

    public function update(Request $request, $id)
    {
        Kendaraan::findOrFail($id)->update($request->all());

        return redirect()->back()->with('success', 'Kendaraan berhasil diperbarui');
    }

    public function destroy($id)
    {
        Kendaraan::destroy($id);

        return redirect()->back()->with('success', 'Kendaraan berhasil dihapus');
    }
}
