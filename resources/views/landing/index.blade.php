@extends('layouts.guest')

@section('title', 'SITRANSMANIA')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/landing.css') }}">
@endpush


@section('hero')
<div id="hero">
    <div class="container text-center">
        <h1 class="display-3 fw-bold">SITRANSMANIA</h1>
        <p class="lead mt-3">
            Sistem Informasi Transportasi & Manajemen Kendaraan Modern
        </p>

        <div class="mt-4">
            <a href="{{ route('login') }}" class="btn btn-hero-brown btn-lg px-4">Masuk Aplikasi</a>
            <a href="{{ route('register') }}" class="btn btn-hero-outline btn-lg px-4 ms-2">Daftar Akun</a>
        </div>
    </div>
</div>
@endsection


@section('content')
<div class="container py-5">

    <h2 class="text-center fw-bold mb-4">Mengapa Memilih SITRANSMANIA?</h2>

    <div class="row g-4">

        <div class="col-md-4">
            <div class="card shadow-sm text-center p-4">
                <div class="fs-1">🚗</div>
                <h5 class="fw-bold mt-3">Manajemen Kendaraan</h5>
                <p class="text-muted">Kelola data kendaraan dengan mudah dan cepat.</p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow-sm text-center p-4">
                <div class="fs-1">👥</div>
                <h5 class="fw-bold mt-3">Data Pengguna</h5>
                <p class="text-muted">Pantau pengguna aktif pemilik & peminjam.</p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow-sm text-center p-4">
                <div class="fs-1">📊</div>
                <h5 class="fw-bold mt-3">Monitoring Transaksi</h5>
                <p class="text-muted">Cek riwayat peminjaman dan pengembalian.</p>
            </div>
        </div>

    </div>


    <div class="card shadow-sm border-0 mt-5">
        <div class="card-body">
            <h4 class="fw-bold">Tentang Sistem</h4>
            <p class="text-muted">
                SITRANSMANIA adalah platform yang mempermudah pencatatan dan pengelolaan kendaraan,
                peminjaman, serta administrasi transportasi di lingkungan kampus maupun perusahaan.
            </p>
        </div>
    </div>

</div>
@endsection
