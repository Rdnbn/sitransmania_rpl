@extends('layouts.landing')

@section('title', 'Layanan | SITRANSMANIA')

@section('content')
<section class="py-5">
    <div class="container">
        <h1 class="fw-bold mb-4 text-center">Layanan Kami</h1>

        <div class="row g-4">
            <div class="col-md-4">
                <div class="card p-4 shadow-sm">
                    <h4 class="fw-bold">Peminjaman Kendaraan</h4>
                    <p>Fitur untuk meminjam kendaraan sekolah secara online kapan pun.</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card p-4 shadow-sm">
                    <h4 class="fw-bold">Monitoring Kendaraan</h4>
                    <p>Lacak kendaraan secara langsung menggunakan Firebase Realtime Database.</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card p-4 shadow-sm">
                    <h4 class="fw-bold">Manajemen Pengguna</h4>
                    <p>Admin dapat mengelola peminjam, pemilik, dan data lainnya.</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
