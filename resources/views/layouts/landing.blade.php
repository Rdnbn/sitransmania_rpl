<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - SITRANSMANIA</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>

    {{-- Navbar public --}}
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand fw-bold" href="{{ route('beranda') }}">SITRANSMANIA</a>

        <ul class="navbar-nav ms-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('beranda') }}">Beranda</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('tentang') }}">Tentang</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('layanan') }}">Layanan</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('kontak') }}">Kontak</a>
            </li>
        </ul>
    </div>
</nav>


    @yield('content')

</body>
</html>
