@extends('layouts.main')

@section('title', 'Detail Akun')

@section('content')
<h2 class="mb-3">Detail Akun</h2>

<div class="card p-3">
    <p><strong>Nama:</strong> {{ $user->nama }}</p>
    <p><strong>Email:</strong> {{ $user->email }}</p>
    <p><strong>Role:</strong> {{ $user->role }}</p>
    <p><strong>No. Telp:</strong> {{ $user->no_telp }}</p>
    <p><strong>Asrama:</strong> {{ $user->asrama }} / {{ $user->kamar }}</p>
    <p><strong>Program Studi:</strong> {{ $user->prodi }} ({{ $user->angkatan }})</p>
</div>

<a href="{{ route('admin.akun.index') }}" class="btn btn-secondary mt-3">Kembali</a>
@endsection
