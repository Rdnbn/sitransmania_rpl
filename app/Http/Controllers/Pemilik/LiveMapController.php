<?php

namespace App\Http\Controllers\Pemilik;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kendaraan;
use Illuminate\Support\Facades\Auth;

class LiveMapController extends Controller
{
    public function index()
    {
        // Kendaraan milik pemilik yang sedang login
        $kendaraan = Kendaraan::where('pemilik_id', Auth::id())->get();

        return view('pemilik.live-map.index', [
            'kendaraan' => $kendaraan
        ]);
    }
}
