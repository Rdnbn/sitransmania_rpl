@extends('layouts.main')

@section('title', 'Edit Akun')

@section('content')
<h2 class="mb-3">Edit Akun</h2>

<form action="{{ route('admin.akun.update', $user->id_user) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label>Nama</label>
        <input type="text" name="nama" value="{{ $user->nama }}" class="form-control">
    </div>

    <div class="mb-3">
        <label>Email</label>
        <input type="email" name="email" value="{{ $user->email }}" class="form-control">
    </div>

    <div class="mb-3">
        <label>Role</label>
        <select name="role" class="form-control">
            <option value="admin" {{ $user->role == 'admin' ? 'selected' : '' }}>Admin</option>
            <option value="pemilik" {{ $user->role == 'pemilik' ? 'selected' : '' }}>Pemilik</option>
            <option value="peminjam" {{ $user->role == 'peminjam' ? 'selected' : '' }}>Peminjam</option>
        </select>
    </div>

    <div class="mb-3">
        <label>Status Akun</label>
        <select name="status_akun" class="form-control">
            <option value="aktif" {{ $user->status_akun == 'aktif' ? 'selected' : '' }}>Aktif</option>
            <option value="nonaktif" {{ $user->status_akun == 'nonaktif' ? 'selected' : '' }}>Nonaktif</option>
        </select>
    </div>

    <button class="btn btn-primary">Simpan</button>
</form>

@endsection
