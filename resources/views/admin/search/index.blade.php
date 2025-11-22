@extends('layouts.app')

@section('title', 'Hasil Pencarian')

@section('content')
<div class="container mt-4">

    <h3 class="mb-3">Hasil Pencarian untuk: <strong>"{{ $keyword }}"</strong></h3>

    {{-- ======================= --}}
    {{--   HASIL PENCARIAN USER  --}}
    {{-- ======================= --}}
    <div class="card mb-4">
        <div class="card-header bg-primary text-white">
            <strong>Pengguna</strong>
        </div>
        <div class="card-body p-3">
            @if($users->count() > 0)
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Role</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $u)
                        <tr>
                            <td>{{ $u->name }}</td>
                            <td>{{ $u->email }}</td>
                            <td>{{ $u->role }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <p class="text-muted mb-0">Tidak ada pengguna yang cocok.</p>
            @endif
        </div>
    </div>


    {{-- ======================= --}}
    {{--  HASIL PENCARIAN KENDARAAN --}}
    {{-- ======================= --}}
    <div class="card mb-4">
        <div class="card-header bg-success text-white">
            <strong>Kendaraan</strong>
        </div>
        <div class="card-body p-3">
            @if($kendaraan->count() > 0)
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Nama Kendaraan</th>
                            <th>Plat</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($kendaraan as $k)
                        <tr>
                            <td>{{ $k->nama }}</td>
                            <td>{{ $k->plat }}</td>
                            <td>{{ $k->status }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <p class="text-muted mb-0">Tidak ada kendaraan yang cocok.</p>
            @endif
        </div>
    </div>


    {{-- ======================= --}}
    {{--  HASIL PENCARIAN PEMINJAMAN --}}
    {{-- ======================= --}}
    <div class="card mb-4">
        <div class="card-header bg-warning text-dark">
            <strong>Peminjaman</strong>
        </div>
        <div class="card-body p-3">
            @if($peminjaman->count() > 0)
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Kode Transaksi</th>
                            <th>Peminjam</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($peminjaman as $p)
                        <tr>
                            <td>{{ $p->kode_transaksi }}</td>
                            <td>{{ $p->peminjam->name ?? '-' }}</td>
                            <td>{{ $p->status }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <p class="text-muted mb-0">Tidak ada data peminjaman yang cocok.</p>
            @endif
        </div>
    </div>

</div>
@endsection
