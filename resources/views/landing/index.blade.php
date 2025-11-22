@extends('layouts.landing')

@section('title', 'SITRANSMANIA')

{{-- HERO --}}
@section('hero')
<div class="hero">
    <div class="hero-content">
        <h1 class="hero-title">SITRANSMANIA</h1>
        <p class="hero-subtitle">
            Sistem Informasi Transportasi & Manajemen Kendaraan Modern
        </p>

        <a href="{{ route('login') }}" class="btn btn-primary px-4 py-2 mt-3">
            Masuk Sistem
        </a>
        <a href="{{ route('register') }}" class="btn btn-outline-light px-4 py-2 mt-3 ms-2">
            Daftar Akun
        </a>
    </div>
</div>
@endsection

{{-- KONTEN --}}
@section('content')
<div class="container py-5">

    {{-- Features --}}
    <div class="text-center mb-5">
        <h2 class="fw-bold">Mengapa Memilih SITRANSMANIA?</h2>
        <p class="text-muted">Solusi lengkap untuk manajemen transportasi modern.</p>
    </div>

    <div class="row g-4">

        <div class="col-md-4">
            <div class="card border-0 shadow-sm p-3 text-center">
                <div class="feature-icon mx-auto mb-3">
                    🚗
                </div>
                <h5 class="fw-bold">Manajemen Kendaraan</h5>
                <p class="text-muted">Kelola data kendaraan dengan mudah dan cepat.</p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card border-0 shadow-sm p-3 text-center">
                <div class="feature-icon mx-auto mb-3">
                    👥
                </div>
                <h5 class="fw-bold">Data Pengguna</h5>
                <p class="text-muted">Pantau pengguna aktif pemilik & peminjam.</p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card border-0 shadow-sm p-3 text-center">
                <div class="feature-icon mx-auto mb-3">
                    📊
                </div>
                <h5 class="fw-bold">Monitoring Transaksi</h5>
                <p class="text-muted">Cek riwayat peminjaman dan pengembalian.</p>
            </div>
        </div>

    </div>

    {{-- Tentang --}}
    <div class="card border-0 shadow-sm mt-5">
        <div class="card-body">
            <h4 class="fw-bold">Tentang Sistem</h4>
            <p class="text-muted">
                SITRANSMANIA adalah platform yang dirancang untuk mempermudah pencatatan 
                dan pengelolaan kendaraan, peminjaman, serta proses administrasi transportasi 
                di berbagai lingkungan seperti kampus dan perusahaan.
            </p>
        </div>
    </div>

</div>
@endsection
