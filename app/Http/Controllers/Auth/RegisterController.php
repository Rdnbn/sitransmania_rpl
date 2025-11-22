<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $request->validate([
    'nama' => 'required',
    'email' => 'required|email|unique:users',
    'no_telp' => 'required',
    'jenis_kelamin' => 'required',
    'asrama' => 'required',
    'kamar' => 'required',
    'prodi' => 'required',
    'angkatan' => 'required',
    'role' => 'required|in:pemilik,peminjam',
    'password' => 'required|confirmed|min:6',
]);


        $user = User::create([
    'nama' => $request->nama,
    'email' => $request->email,
    'no_telp' => $request->no_telp,
    'jenis_kelamin' => $request->jenis_kelamin,
    'asrama' => $request->asrama,
    'kamar' => $request->kamar,
    'prodi' => $request->prodi,
    'angkatan' => $request->angkatan,
    'role' => $request->role,
    'password' => bcrypt($request->password),
]);

        Auth::login($user);
        return redirect()->route($user->role . '.dashboard');
    }
}
