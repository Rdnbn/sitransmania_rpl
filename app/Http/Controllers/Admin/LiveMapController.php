<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kendaraan;

class LiveMapController extends Controller
{
    public function index()
    {
        // Ambil data kendaraan aktif dari database
        $kendaraan = Kendaraan::where('status', '!=', 'Tidak Aktif')->get();

        return view('admin.live-map.index', [
            'kendaraan' => $kendaraan
        ]);
    }
}
