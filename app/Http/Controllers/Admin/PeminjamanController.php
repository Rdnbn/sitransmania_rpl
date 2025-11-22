<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Peminjaman;
use Illuminate\Http\Request;

class PeminjamanController extends Controller
{
    public function index()
    {
        return view('admin.peminjaman.index', [
            'peminjaman' => Peminjaman::with(['peminjam', 'pemilik', 'kendaraan'])->get()
        ]);
    }

    public function updateStatus(Request $request, $id)
    {
        $p = Peminjaman::findOrFail($id);
        $p->status = $request->status;
        $p->save();

        return back()->with('success', 'Status peminjaman diperbarui');
    }

    public function destroy($id)
    {
        Peminjaman::destroy($id);

        return back()->with('success', 'Riwayat peminjaman dihapus');
    }
}
