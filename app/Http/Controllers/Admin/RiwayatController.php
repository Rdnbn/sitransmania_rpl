<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Peminjaman;

class RiwayatController extends Controller
{
    public function index()
    {
        return view('admin.riwayat.index', [
            'riwayat' => Peminjaman::latest()->get()
        ]);
    }

    public function export()
    {
        // nanti kamu isi Excel / PDF
        return "Fitur export belum diisi";
    }
}
