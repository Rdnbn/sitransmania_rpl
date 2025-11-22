@extends('layouts.app')

@section('title', 'Daftar Akun | SITRANSMANIA')

@section('content')
<style>
    body {
        background: linear-gradient(180deg, #f5f0ea 0%, #ffffff 60%, #d7ccc8 100%);
        font-family: "Inter", sans-serif;
        color: #3e2723;
    }

    .register-container {
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 40px 20px;
    }

    .register-card {
        background: #ffffff;
        border-radius: 18px;
        padding: 48px 40px;
        box-shadow: 0 8px 30px rgba(0, 0, 0, 0.08);
        width: 480px;
        text-align: center;
    }

    .register-card h1 {
        color: #4e342e;
        margin-bottom: 10px;
        font-size: 28px;
    }

    .register-card p {
        color: #6d4c41;
        font-size: 15px;
        margin-bottom: 28px;
    }

    .form-group {
        margin-bottom: 18px;
        text-align: left;
    }

    label {
        font-weight: 600;
        font-size: 14px;
        color: #4e342e;
        margin-bottom: 6px;
        display: block;
    }

    input, select {
        width: 100%;
        padding: 12px 14px;
        border: 1px solid #d7ccc8;
        border-radius: 8px;
        font-size: 15px;
        color: #3e2723;
        background: #fdfdfd;
    }

    .btn {
        background: #4e342e;
        color: white;
        border: none;
        border-radius: 8px;
        padding: 12px 0;
        width: 100%;
        font-size: 16px;
        font-weight: 600;
        cursor: pointer;
        transition: 0.3s;
    }

    .btn:hover {
        background: #6d4c41;
        transform: translateY(-2px);
    }

    .footer-text {
        margin-top: 18px;
        font-size: 14px;
    }

    .footer-text a {
        color: #4e342e;
        font-weight: 600;
        text-decoration: none;
    }

    .footer-text a:hover {
        text-decoration: underline;
    }
</style>

<div class="register-container">
    <div class="register-card">
        <h1>Daftar Akun SITRANSMANIA</h1>
        <p>Isi data berikut untuk membuat akun baru.</p>

        <form action="{{ route('register.store') }}" method="POST" >
            @csrf

            <div class="form-group">
                <label for="nama">Nama Lengkap</label>
                <input type="text" id="nama" name="nama" placeholder="Nama lengkap anda" required>
            </div>

            <div class="form-group">
                <label for="email">Alamat Email</label>
                <input type="email" id="email" name="email" placeholder="contoh@email.com" required>
            </div>

            <div class="form-group">
                <label for="no_telp">Nomor Telepon</label>
                <input type="text" id="no_telp" name="no_telp" placeholder="08xxxxxxxxxx" required>
            </div>

            <div class="form-group">
                <label>Jenis Kelamin</label>
                <select name="jenis_kelamin" required>
                    <option value="" disabled selected>Pilih Jenis Kelamin</option>
                    <option value="L">Laki-laki</option>
                    <option value="P">Perempuan</option>
                </select>
            </div>

             <div class="form-group">
                <label>Asrama</label>
                <select name="asrama" required>
                    <option value="" disabled selected>Pilih Asrama</option>
                    <option value="Lili">Lili</option>
                    <option value="Tulip">Tulip</option>
                    <option value="Dahlia">Dahlia</option>
                    <option value="Aster">Aster</option>
                    <option value="Soka">Soka</option>
                    <option value="Edelweiss">Edelweiss</option>
                    <option value="Cempaka">Cempaka</option>
                    <option value="Melati">Melati</option>
                </select>
            </div>

            <div class="form-group">
                <label for="kamar">Nomor Kamar</label>
                <input type="text" id="kamar" name="kamar" placeholder="Contoh: 112" required>
            </div>

            <div class="form-group">
                <label for="prodi">Program Studi</label>
                <input type="text" id="prodi" name="prodi" placeholder="Contoh: Teknik Informatika" required>
            </div>

            <div class="form-group">
                <label for="angkatan">Angkatan</label>
                <input type="text" id="angkatan" name="angkatan" placeholder="Contoh: 2022" required>
            </div>

            <div class="form-group">
                <label for="role">Daftar Sebagai</label>
                <select id="role" name="role" required>
                    <option value="" disabled selected>Pilih Role</option>
                    <option value="pemilik">🚗 Pemilik</option>
                    <option value="peminjam">👤 Peminjam</option>
                </select>
            </div>

            <div class="form-group">
                <label for="password">Kata Sandi</label>
                <input type="password" id="password" name="password" placeholder="••••••••" required>
            </div>

            <div class="form-group">
                <label for="password_confirmation">Konfirmasi Kata Sandi</label>
                <input type="password" id="password_confirmation" name="password_confirmation" placeholder="••••••••" required>
            </div>
            <button type="submit" class="btn">Daftar Sekarang</button>
        </form>

        <div class="footer-text">
            <p>Sudah punya akun? <a href="{{ route('login') }}">Masuk di sini</a></p>
        </div>
    </div>
</div>
@endsection
