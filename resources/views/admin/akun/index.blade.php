@extends('layouts.main')

@section('title', 'Manajemen Akun - Admin')

@section('content')
<h1 class="mb-4">Manajemen Akun</h1>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>Nama</th>
            <th>Email</th>
            <th>Role</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $u)
        <tr>
            <td>{{ $u->nama }}</td>
            <td>{{ $u->email }}</td>
            <td>{{ $u->role }}</td>
            <td>{{ $u->status_akun }}</td>
            <td>
                <a href="{{ route('admin.akun.detail', $u->id_user) }}" class="btn btn-sm btn-primary">Detail</a>
                <a href="{{ route('admin.akun.edit', $u->id_user) }}" class="btn btn-sm btn-warning">Edit</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
