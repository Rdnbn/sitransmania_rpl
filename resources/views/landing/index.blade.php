@extends('layouts.landing') 
{{-- Sesuaikan dengan layout public-mu --}}

@section('title', 'Dashboard | SITRANSMANIA')
@section('page_title', 'Dashboard')

@section('content')
<div class="container py-5">

    {{-- Header --}}
    <div class="text-center mb-5">
        <h1 class="fw-bold">SITRANSMANIA</h1>
        <p class="text-muted">Sistem Informasi Transportasi & Manajemen Kendaraan</p>
    </div>

    {{-- 3 Info Cards --}}
    <div class="row g-4 mb-5">

        <div class="col-md-4">
            <div class="card shadow-sm border-0 h-100">
                <div class="card-body">
                    <h5 class="card-title fw-bold">Total Kendaraan</h5>
                    <p class="text-muted">Jumlah seluruh kendaraan yang terdaftar.</p>
                    <h2 class="fw-bold text-primary">{{ $totalKendaraan ?? 0 }}</h2>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow-sm border-0 h-100">
                <div class="card-body">
                    <h5 class="card-title fw-bold">Total Pengguna</h5>
                    <p class="text-muted">Jumlah pemilik & peminjam aktif.</p>
                    <h2 class="fw-bold text-success">{{ $totalPengguna ?? 0 }}</h2>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow-sm border-0 h-100">
                <div class="card-body">
                    <h5 class="card-title fw-bold">Transaksi Hari Ini</h5>
                    <p class="text-muted">Data peminjaman / pengembalian.</p>
                    <h2 class="fw-bold text-warning">{{ $transaksiHariIni ?? 0 }}</h2>
                </div>
            </div>
        </div>

    </div>

    {{-- Informasi Sistem --}}
    <div class="card border-0 shadow-sm mb-5">
        <div class="card-body">
            <h4 class="fw-bold">Tentang SITRANSMANIA</h4>
            <p class="text-muted">
                SITRANSMANIA merupakan platform yang dirancang untuk membantu dalam manajemen transportasi, 
                pencatatan kendaraan, peminjaman, hingga pelaporan aktivitas. 
                Sistem ini mempermudah proses administrasi bagi pemilik dan peminjam.
            </p>
        </div>
    </div>

    {{-- CTA --}}
    <div class="text-center">
        <a href="{{ route('login') }}" class="btn btn-primary px-4 py-2">
            Masuk ke Sistem
        </a>
        <a href="{{ route('register') }}" class="btn btn-outline-primary px-4 py-2 ms-2">
            Daftar Akun
        </a>
    </div>

</div>
@endsection
