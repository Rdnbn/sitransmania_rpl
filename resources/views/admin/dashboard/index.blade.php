@extends('layouts.dashboard')

@section('title', 'Dashboard Admin')
@section('page_title', 'Dashboard Admin')

@section('content')
    <h3>Selamat Datang, Admin 👨‍💼</h3>
    <p>Kelola seluruh data pengguna, kendaraan, serta aktivitas sistem SITRANSMANIA.</p>

    <div style="display: flex; gap: 20px; margin-top: 20px;">
        <div style="background: white; padding: 20px; border-radius: 10px; flex: 1; box-shadow: 0 4px 10px rgba(0,0,0,0.05);">
            <h4>Total Pengguna</h4>
            <p style="font-size: 24px; font-weight: 700;">125</p>
        </div>
        <div style="background: white; padding: 20px; border-radius: 10px; flex: 1; box-shadow: 0 4px 10px rgba(0,0,0,0.05);">
            <h4>Total Kendaraan</h4>
            <p style="font-size: 24px; font-weight: 700;">64</p>
        </div>
        <div style="background: white; padding: 20px; border-radius: 10px; flex: 1; box-shadow: 0 4px 10px rgba(0,0,0,0.05);">
            <h4>Transaksi Hari Ini</h4>
            <p style="font-size: 24px; font-weight: 700;">9</p>
        </div>
    </div>

    <div style="margin-top: 40px;">
        <h4>Aktivitas Terbaru</h4>
        <ul style="background: white; padding: 20px; border-radius: 10px; list-style: none;">
            <li>✅ Peminjaman oleh <b>Rina</b> disetujui</li>
            <li>🚗 Pemilik <b>Budi</b> menambahkan kendaraan baru</li>
            <li>💬 Pesan baru diterima dari <b>Andi</b></li>
        </ul>
    </div>
@endsection
