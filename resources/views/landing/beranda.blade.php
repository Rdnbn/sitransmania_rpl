@extends('layouts.landing')

@section('title', 'Beranda | SITRANSMANIA')

@section('content')
<section class="py-5 text-center bg-light">
    <div class="container">
        <h1 class="fw-bold mb-3">Selamat Datang di SITRANSMANIA</h1>
        <p class="lead">Platform peminjaman kendaraan SMKN 1 Bantul yang cepat, aman, dan terintegrasi.</p>
        <a href="#layanan" class="btn btn-primary px-4 py-2 mt-3">Pelajari Lebih Lanjut</a>
    </div>
</section>

<section class="py-5">
    <div class="container">
        <h2 class="fw-bold mb-4 text-center">Fitur Utama</h2>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card p-4 shadow-sm">
                    <h4 class="fw-bold">Peminjaman Online</h4>
                    <p>Ajukan peminjaman kendaraan hanya dalam beberapa klik tanpa proses manual.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-4 shadow-sm">
                    <h4 class="fw-bold">Pelacakan Real-Time</h4>
                    <p>Ketahui lokasi kendaraan secara langsung melalui integrasi GPS/Firebase Live Map.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-4 shadow-sm">
                    <h4 class="fw-bold">Manajemen Data</h4>
                    <p>Admin dan pemilik dapat mengelola data kendaraan, peminjaman, dan laporan dengan mudah.</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
