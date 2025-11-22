@extends('layouts.auth')

@section('title', 'Logout')
@section('page_title', 'Konfirmasi Logout')

@section('content')
<div style="max-width: 420px; margin: 40px auto; background: #fff; padding: 30px; border-radius: 12px; box-shadow: 0 6px 20px rgba(0,0,0,0.08); text-align:center;">

    <h2 style="margin-bottom: 15px;">Keluar dari Akun?</h2>
    <p style="color:#555; margin-bottom: 25px;">
        Apakah kamu yakin ingin keluar dari akun SITRANSMANIA?
    </p>

    <div style="display:flex; justify-content:center; gap:20px;">

        <!-- Tombol Batalkan -->
        <a href="{{ url()->previous() }}" 
           style="padding:10px 20px; border-radius:8px; border:1px solid #ccc; text-decoration:none; color:#333;">
            Batal
        </a>

        <!-- Tombol Logout -->
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" 
                    style="background:#d9534f; color:white; padding:10px 20px; border:none; border-radius:8px; cursor:pointer;">
                Logout
            </button>
        </form>

    </div>
</div>
@endsection
