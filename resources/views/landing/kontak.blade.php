@extends('layouts.landing')

@section('title', 'Kontak | SITRANSMANIA')

@section('content')
<section class="py-5">
    <div class="container">
        <h1 class="fw-bold mb-4 text-center">Hubungi Kami</h1>

        <div class="row">
            <div class="col-md-6">
                <h4 class="fw-bold mb-3">Informasi Kontak</h4>
                <p>Email: sitransmania@smkn1bantul.sch.id</p>
                <p>Telepon: +62 812-3456-7890</p>
                <p>Alamat: SMKN 1 Bantul, Jalan Parangtritis Km 11</p>
            </div>

            <div class="col-md-6">
                <h4 class="fw-bold mb-3">Kirim Pesan</h4>
                <form>
                    <div class="mb-3">
                        <label class="form-label">Nama</label>
                        <input type="text" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Pesan</label>
                        <textarea class="form-control" rows="4"></textarea>
                    </div>

                    <button class="btn btn-primary w-100">Kirim</button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
