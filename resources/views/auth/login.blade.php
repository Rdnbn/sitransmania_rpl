@extends('layouts.app')

@section('title', 'Login | SITRANSMANIA')

@section('content')

@if (session('success'))
    <div style="background: #d7ccc8; color: #3e2723; padding: 10px; border-radius: 6px; margin-bottom: 16px;">
        {{ session('success') }}
    </div>
@endif
<style>
    body {
        background: linear-gradient(180deg, #d7ccc8 0%, #f5f0ea 60%, #ffffff 100%);
        font-family: "Inter", sans-serif;
        color: #3e2723;
    }

    .login-container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 90vh;
    }

    .login-card {
        background: #ffffff;
        border-radius: 18px;
        padding: 48px 40px;
        box-shadow: 0 8px 30px rgba(0, 0, 0, 0.08);
        width: 400px;
        text-align: center;
        transition: all 0.3s ease;
    }

    .login-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
    }

    .login-card h1 {
        color: #4e342e;
        margin-bottom: 10px;
        font-size: 28px;
    }

    .login-card p {
        color: #6d4c41;
        font-size: 15px;
        margin-bottom: 28px;
    }

    .form-group {
        margin-bottom: 20px;
        text-align: left;
    }

    .form-group label {
        display: block;
        font-size: 14px;
        font-weight: 600;
        color: #4e342e;
        margin-bottom: 6px;
    }

    .form-group input {
        width: 100%;
        padding: 12px 14px;
        border: 1px solid #d7ccc8;
        border-radius: 8px;
        font-size: 15px;
        color: #3e2723;
        background: #fdfdfd;
        transition: all 0.2s ease;
    }

    .form-group input:focus {
        outline: none;
        border-color: #8d6e63;
        box-shadow: 0 0 0 3px rgba(141, 110, 99, 0.2);
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
        transition: all 0.3s ease;
        box-shadow: 0 6px 20px rgba(78, 52, 46, 0.25);
    }

    .btn:hover {
        background: #6d4c41;
        transform: translateY(-2px);
    }

    .footer-text {
        margin-top: 24px;
        font-size: 14px;
        color: #5d4037;
    }

    .footer-text a {
        color: #4e342e;
        text-decoration: none;
        font-weight: 600;
    }

    .footer-text a:hover {
        text-decoration: underline;
    }

    @media (max-width: 480px) {
        .login-card {
            width: 88%;
            padding: 32px 24px;
        }
    }
</style>

<div class="login-container">
    <div class="login-card">
        <h1>Masuk ke SITRANSMANIA</h1>
        <p>Masukkan akun Anda untuk mengakses sistem peminjaman transportasi.</p>

        <form action="{{ route('login.submit') }}" method="POST" >
            @csrf

            <div class="form-group">
                <label for="email">Alamat Email</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="password">Kata Sandi</label>
                <input type="password" id="password" name="password" required>
            </div>

            <button type="submit" class="btn">Masuk</button>
        </form>

        <div class="footer-text">
            <p>Belum punya akun? <a href="{{ route('register') }}">Daftar Sekarang</a></p>
        </div>
    </div>
</div>

@endsection