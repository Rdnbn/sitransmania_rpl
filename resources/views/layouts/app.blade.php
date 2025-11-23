<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'SITRANSMANIA')</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    {{-- Font & Icon --}}
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;800&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

    <style>
        :root {
            --coklat-tua: #4e342e;
            --coklat-muda: #8d6e63;
            --krem: #f5f0ea;
            --putih: #ffffff;
            --abu: #f3f3f3;
        }

        body {
            margin: 0;
            font-family: 'Inter', sans-serif;
            background-color: var(--krem);
            color: #333;
            display: flex;
            min-height: 100vh;
        }

        /* Layout Wrapper */
        .layout-wrapper {
            display: flex;
            width: 100%;
        }

        /* Main content */
        main {
            flex: 1;
            padding: 40px;
            background: linear-gradient(180deg, var(--krem), var(--putih));
        }

        footer {
            background: var(--coklat-muda);
            color: var(--putih);
            text-align: center;
            padding: 14px;
        }
    </style>
</head>

<body>

<div class="layout-wrapper">

    {{-- Sidebar --}}
    @if(Auth::check())
        @if(Auth::user()->role === 'admin')
            @include('layouts.sidebar.admin')
        @elseif(Auth::user()->role === 'pemilik')
            @include('layouts.sidebar.pemilik')
        @elseif(Auth::user()->role === 'peminjam')
            @include('layouts.sidebar.peminjam')
        @endif
    @endif

    {{-- Main Content --}}
    <main>
        @yield('content')

        {{-- Footer --}}
        <footer>
            © 2025 SITRANSMANIA | Universitas Negeri Malang
        </footer>
    </main>

</div>

</body>
</html>
