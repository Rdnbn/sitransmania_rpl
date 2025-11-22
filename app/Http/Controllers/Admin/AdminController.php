<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Kendaraan;
use App\Models\Peminjaman;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * 🔎 Search Global (User, Kendaraan, Peminjaman)
     */
    public function search(Request $request)
    {
        $keyword = trim($request->keyword);

        // Jika keyword kosong
        if ($keyword == '') {
            return redirect()->back()->with('error', 'Masukkan kata kunci pencarian.');
        }

        $users = User::where('name', 'like', "%$keyword%")->get();
        $kendaraan = Kendaraan::where('plat', 'like', "%$keyword%")->get();
        $peminjaman = Peminjaman::where('kode_transaksi', 'like', "%$keyword%")->get();

        return view('admin.search.index', [
            'keyword' => $keyword,
            'users' => $users,
            'kendaraan' => $kendaraan,
            'peminjaman' => $peminjaman
        ]);
    }
}
