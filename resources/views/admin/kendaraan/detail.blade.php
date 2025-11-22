@extends('layouts.main')

@section('title', 'Detail Kendaraan')

@section('content')
<h2>Detail Kendaraan</h2>

<div class="card p-3">
    <p><strong>Nama:</strong> {{ $kendaraan->nama_kendaraan }}</p>
    <p><strong>Pemilik:</strong> {{ $kendaraan->pemilik->nama }}</p>
    <p><strong>Jenis:</strong> {{ $kendaraan->jenis_kendaraan }}</p>
    <p><strong>Status:</strong> {{ $kendaraan->status }}</p>
    <p><strong>Spesifikasi:</strong> {{ $kendaraan->spesifikasi }}</p>
    <p><strong>Syarat & Ketentuan:</strong> {{ $kendaraan->syarat_ketentuan }}</p>
</div>

<a href="{{ route('admin.kendaraan.index') }}" class="btn btn-secondary mt-3">Kembali</a>
@endsection
