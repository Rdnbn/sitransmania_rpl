@extends('layouts.dashboard')

@section('title', 'Dashboard Pemilik')
@section('page_title', 'Dashboard Pemilik')

@section('content')
    <h3>Selamat Datang, Pemilik 🚗</h3>
    <p>Kelola kendaraan Anda, pantau status peminjaman, dan terima notifikasi dari peminjam.</p>

    <div style="display: flex; gap: 20px; margin-top: 20px;">
        <div style="background: white; padding: 20px; border-radius: 10px; flex: 1;">
            <h4>Kendaraan Aktif</h4>
            <p style="font-size: 24px; font-weight: 700;">5</p>
        </div>
        <div style="background: white; padding: 20px; border-radius: 10px; flex: 1;">
            <h4>Peminjaman Berlangsung</h4>
            <p style="font-size: 24px; font-weight: 700;">2</p>
        </div>
        <div style="background: white; padding: 20px; border-radius: 10px; flex: 1;">
            <h4>Pesan Belum Dibaca</h4>
            <p style="font-size: 24px; font-weight: 700;">3</p>
        </div>
    </div>

    <div style="margin-top: 40px;">
        <h4>Riwayat Peminjaman Terbaru</h4>
        <table style="width: 100%; background: white; border-collapse: collapse; border-radius: 8px; overflow: hidden;">
            <thead style="background: #f5f0ea;">
                <tr>
                    <th style="padding: 12px;">Tanggal</th>
                    <th style="padding: 12px;">Nama Peminjam</th>
                    <th style="padding: 12px;">Kendaraan</th>
                    <th style="padding: 12px;">Status</th>
                </tr>
            </thead>
            <tbody>
                <tr style="text-align: center;">
                    <td>10/11/2025</td>
                    <td>Rizky</td>
                    <td>Honda Beat</td>
                    <td>Selesai</td>
                </tr>
                <tr style="text-align: center; background: #fdfcfb;">
                    <td>11/11/2025</td>
                    <td>Wulan</td>
                    <td>Sepeda Polygon</td>
                    <td>Dipinjam</td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
