<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - SITRANSMANIA</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Style -->
    <style>
        /* Hero Section */
        .hero {
            height: 100vh;
            background: url('/storage/landing/sitrans-bg.jpg') center/cover no-repeat;
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        .hero::after {
            content: "";
            position: absolute;
            inset: 0;
            background: rgba(0, 0, 0, 0.45);
        }

        .hero-content {
            position: relative;
            z-index: 2;
            color: #fff;
        }

        .hero-title {
            font-size: 3.5rem;
            font-weight: 800;
        }

        .hero-subtitle {
            font-size: 1.2rem;
            margin-top: 10px;
            opacity: 0.9;
        }

        .feature-icon {
            width: 60px;
            height: 60px;
            display: flex;
            justify-content: center;
            align-items: center;
            background: #f0f0f0;
            border-radius: 50%;
            font-size: 24px;
        }
    </style>
</head>

<body>

    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm fixed-top">
        <div class="container">
            <a class="navbar-brand fw-bold" href="{{ route('beranda') }}">SITRANSMANIA</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
                data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="{{ route('beranda') }}">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('tentang') }}">Tentang</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('layanan') }}">Layanan</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('kontak') }}">Kontak</a></li>
                </ul>
            </div>
        </div>
    </nav>

    {{-- Hero Section --}}
    @yield('hero')

    {{-- Content --}}
    @yield('content')

    {{-- Bootstrap JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
