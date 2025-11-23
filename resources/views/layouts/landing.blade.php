@extends('layouts.guest')

@section('title', 'Beranda')

@push('styles')
<style>
    .hero {
        height: 100vh;
        background: url('/pubic/images/Asrama.jpg') center/cover no-repeat;
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
        color: white;
    }
    .hero-title { font-size: 3rem; font-weight: 800; }
    .hero-subtitle { font-size: 1.2rem; opacity: .9; }
</style>
@endpush

@section('hero')
<div class="hero">
    <div>
        <h1 class="hero-title">SITRANSMANIA</h1>
        <p class="hero-subtitle">Sistem Layanan Peminjaman Transportasi Antar Warga Asrama</p>

        @guest
        <button class="btn btn-primary mt-4" onclick="window.location.href='{{ route('login') }}'">
            Masuk ke Aplikasi
        </button>
        @endguest
    </div>
</div>
@endsection

@section('content')
<div class="container py-5">
    <h2 class="fw-bold text-center mb-4">Kenapa Memilih SITRANSMANIA?</h2>

    <div class="row g-4 justify-content-center">
        <div class="col-md-3">
            <div class="text-center p-4 rounded shadow-sm bg-white">
                <div class="feature-icon mb-3"><i class="fas fa-motorcycle"></i></div>
                <h5>Peminjaman Mudah</h5>
                <p>Ajukan pinjaman kendaraan hanya dengan beberapa klik.</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="text-center p-4 rounded shadow-sm bg-white">
                <div class="feature-icon mb-3"><i class="fas fa-users"></i></div>
                <h5>Komunitas Aman</h5>
                <p>Pengguna terverifikasi untuk keamanan bersama.</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="text-center p-4 rounded shadow-sm bg-white">
                <div class="feature-icon mb-3"><i class="fas fa-chart-line"></i></div>
                <h5>Riwayat Lengkap</h5>
                <p>Lihat semua aktivitas peminjaman kapan saja.</p>
            </div>
        </div>
    </div>
</div>
@endsection
