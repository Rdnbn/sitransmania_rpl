@extends('layouts.guest')

@section('title', 'Beranda')

@section('content')
@push('styles')
<link rel="stylesheet" href="{{ asset('css/landing.css') }}">
@endpush

<style>
    .hero {
        position: relative;
        width: 100%;
        height: 90vh;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        text-align: center;
        background: linear-gradient(180deg, #d7ccc8 0%, #f5f0ea 60%, #ffffff 100%);
        color: #3e2723;
        overflow: hidden;
        border-radius: 12px;
        padding: 20px;
    }

    .hero h1 {
        font-size: 68px;
        font-weight: 800;
        margin: 0;
        color: #4e342e;
        text-shadow: 0 3px 10px rgba(0, 0, 0, 0.15);
    }

    .hero h3 {
        font-size: 22px;
        font-weight: 400;
        color: #5d4037;
        margin-top: 12px;
        max-width: 900px;
    }

    .hero p {
        max-width: 700px;
        margin-top: 28px;
        font-size: 18px;
        line-height: 1.6;
        background: rgba(255, 255, 255, 0.85);
        color: #3e2723;
        padding: 18px 30px;
        border-radius: 14px;
        box-shadow: 0 4px 14px rgba(0, 0, 0, 0.05);
    }

    .btn-hero {
        background: #4e342e;
        color: #fff;
        padding: 14px 38px;
        border: none;
        border-radius: 10px;
        font-size: 18px;
        font-weight: 600;
        cursor: pointer;
        margin-top: 36px;
        transition: all 0.3s ease;
        box-shadow: 0 6px 20px rgba(78, 52, 46, 0.3);
    }

    .btn-hero:hover {
        background: #6d4c41;
        transform: translateY(-3px);
    }

    .section-info {
        margin-top: 80px;
        text-align: center;
        padding: 0 20px;
    }

    .section-info h2 {
        font-size: 28px;
        color: #4e342e;
        margin-bottom: 12px;
    }

    .section-info p {
        font-size: 17px;
        color: #5d4037;
        max-width: 700px;
        margin: 0 auto;
        line-height: 1.7;
    }

    .features {
        display: flex;
        justify-content: center;
        gap: 40px;
        margin-top: 60px;
        flex-wrap: wrap;
        padding-bottom: 80px;
    }

    .feature-card {
        background: #ffffff;
        border-radius: 14px;
        padding: 28px 24px;
        width: 260px;
        text-align: center;
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.08);
        transition: all 0.3s ease;
    }

    .feature-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 10px 28px rgba(0, 0, 0, 0.12);
    }

    .feature-card i {
        font-size: 40px;
        color: #4e342e;
        margin-bottom: 14px;
    }

    .feature-card h3 {
        font-size: 18px;
        color: #4e342e;
        margin-bottom: 8px;
    }

    .feature-card p {
        font-size: 15px;
        color: #5d4037;
        line-height: 1.5;
    }

    @media (max-width: 768px) {
        .hero h1 { font-size: 48px; }
        .hero p { font-size: 16px; }
    }
</style>

<div class="container-fluid">
    <div class="hero">
        <h1>SITRANSMANIA</h1>
        <h3>Sistem Layanan Peminjaman Transportasi Antar Warga Asrama Mahasiswa Universitas Negeri Malang</h3>

        <p>
            SITRANSMANIA hadir untuk memudahkan warga asrama dalam meminjam kendaraan seperti motor, sepeda, dan helm
            secara cepat, aman, dan terorganisir dalam satu platform digital yang efisien.
        </p>

        <button class="btn-hero" onclick="window.location.href='{{ route('login') }}'">
            Masuk ke Aplikasi
        </button>
    </div>

    <div class="section-info">
        <h2>Kenapa Memilih SITRANSMANIA?</h2>
        <p>
            Dengan sistem terintegrasi dan tampilan yang intuitif, SITRANSMANIA membantu mengelola peminjaman kendaraan di lingkungan asrama dengan mudah, aman, dan transparan.
        </p>

        <div class="features">
            <div class="feature-card">
                <i class="fas fa-motorcycle"></i>
                <h3>Peminjaman Mudah</h3>
                <p>Ajukan pinjaman kendaraan hanya dengan beberapa klik.</p>
            </div>

            <div class="feature-card">
                <i class="fas fa-users"></i>
                <h3>Komunitas Aman</h3>
                <p>Setiap pengguna terverifikasi untuk keamanan bersama.</p>
            </div>

            <div class="feature-card">
                <i class="fas fa-bell"></i>
                <h3>Notifikasi Real-time</h3>
                <p>Selalu dapatkan informasi terbaru terkait status pinjaman.</p>
            </div>

            <div class="feature-card">
                <i class="fas fa-chart-line"></i>
                <h3>Riwayat Lengkap</h3>
                <p>Lacak aktivitas dan peminjaman kendaraan kapan saja.</p>
            </div>
        </div>
    </div>
</div>
@endsection
