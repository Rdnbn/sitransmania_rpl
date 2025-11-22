<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // Halaman login
    public function index()
    {
        // Jika sudah login, arahkan ke dashboard sesuai role
        if (Auth::check()) {

            $role = Auth::user()->role;

            if ($role === 'admin') {
                return redirect()->route('admin.dashboard');
            }
            if ($role === 'pemilik') {
                return redirect()->route('pemilik.dashboard');
            }
            if ($role === 'peminjam') {
                return redirect()->route('peminjam.dashboard');
            }
        }

        // Jika belum login, tampilkan form login
        return view('auth.login');
    }


    // Proses login
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email'    => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {

            $request->session()->regenerate();

            $user = Auth::user();
            $role = $user->role;

            // Redirect berdasarkan role
           switch ($user->role) {
    case 'admin':
        return redirect()->route('admin.dashboard');
    case 'pemilik':
        return redirect()->route('pemilik.dashboard');
    case 'peminjam':
        return redirect()->route('peminjam.dashboard');
}

            // fallback
            return redirect('/');
        }

        // Jika gagal
        return back()->withErrors([
            'email' => 'Email atau password salah.',
        ])->withInput();
    }


    // Logout
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}
