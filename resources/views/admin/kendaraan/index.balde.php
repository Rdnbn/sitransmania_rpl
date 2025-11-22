@extends('layouts.main')

@section('title', 'Manajemen Kendaraan')

@section('content')
<h1>Data Kendaraan</h1>

<table class="table mt-3">
    <thead>
        <tr>
            <th>Nama Kendaraan</th>
            <th>Pemilik</th>
            <th>Jenis</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($kendaraan as $k)
        <tr>
            <td>{{ $k->nama_kendaraan }}</td>
            <td>{{ $k->pemilik->nama }}</td>
            <td>{{ $k->jenis_kendaraan }}</td>
            <td>{{ $k->status }}</td>
            <td>
                <a href="{{ route('admin.kendaraan.detail', $k->id_kendaraan) }}" class="btn btn-sm btn-info">Detail</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
