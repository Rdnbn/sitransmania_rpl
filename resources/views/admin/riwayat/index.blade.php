@extends('layouts.main')

@section('title', 'Riwayat Aktivitas')

@section('content')
<h1>Riwayat Aktivitas Pengguna</h1>

<table class="table mt-3">
    <thead>
        <tr>
            <th>User</th>
            <th>Aktivitas</th>
            <th>Tanggal</th>
            <th>Kategori</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($riwayat as $r)
        <tr>
            <td>{{ $r->user->nama }}</td>
            <td>{{ $r->aktivitas }}</td>
            <td>{{ $r->tanggal }}</td>
            <td>{{ $r->kategori }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
