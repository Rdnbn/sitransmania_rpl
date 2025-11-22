@extends('layouts.dashboard')

@section('title', 'Dashboard Peminjam')
@section('page_title', 'Dashboard Peminjam')

@section('content')
    <h3>Selamat Datang, Peminjam 🧍‍♂️</h3>
    <p>Cari kendaraan, ajukan peminjaman, dan pantau status transaksi Anda.</p>

    <div style="display: flex; gap: 20px; margin-top: 20px;">
        <div style="background: white; padding: 20px; border-radius: 10px; flex: 1;">
            <h4>Peminjaman Aktif</h4>
            <p style="font-size: 24px; font-weight: 700;">1</p>
        </div>
        <div style="background: white; padding: 20px; border-radius: 10px; flex: 1;">
            <h4>Total Riwayat</h4>
            <p style="font-size: 24px; font-weight: 700;">6</p>
        </div>
        <div style="background: white; padding: 20px; border-radius: 10px; flex: 1;">
            <h4>Notifikasi Baru</h4>
            <p style="font-size: 24px; font-weight: 700;">2</p>
        </div>
    </div>

    <div style="margin-top: 40px;">
        <h4>Kendaraan yang Direkomendasikan</h4>
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); gap: 16px; margin-top: 16px;">
            <div style="background: white; padding: 14px; border-radius: 10px; box-shadow: 0 4px 10px rgba(0,0,0,0.05); text-align: center;">
                <img src="https://cdn-icons-png.flaticon.com/512/3448/3448613.png" alt="Motor" style="width:80px;">
                <h4>Motor Matic</h4>
                <p>Rp25.000 / Hari</p>
                <button style="background:#8d6e63; color:white; border:none; padding:8px 14px; border-radius:6px; cursor:pointer;">Pinjam</button>
            </div>
            <div style="background: white; padding: 14px; border-radius: 10px; box-shadow: 0 4px 10px rgba(0,0,0,0.05); text-align: center;">
                <img src="https://cdn-icons-png.flaticon.com/512/2830/2830308.png" alt="Sepeda" style="width:80px;">
                <h4>Sepeda Gunung</h4>
                <p>Rp10.000 / Hari</p>
                <button style="background:#8d6e63; color:white; border:none; padding:8px 14px; border-radius:6px; cursor:pointer;">Pinjam</button>
            </div>
        </div>
    </div>
@endsection
