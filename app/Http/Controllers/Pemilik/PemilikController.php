<?php

namespace App\Http\Controllers\Pemilik;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PemilikController extends Controller
{
    public function index()
    {
        // Profil akun
        $user = auth()->user();
        @dd($user);
        return view('pemilik.akun.index');
    }

    public function updateProfil(Request $request)
    {
        // Update data diri
        return back()->with('success', 'Profil berhasil diperbarui.');
    }

    public function updatePassword(Request $request)
    {
        // Update password
        return back()->with('success', 'Password berhasil diganti.');
    }
}
