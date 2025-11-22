<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'SITRANSMANIA')</title>

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
            flex-direction: column;
            min-height: 100vh;
        }

        /* === Navbar === */
        nav {
            background: var(--coklat-tua);
            color: var(--putih);
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 16px 48px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }

        nav .logo {
            font-weight: 800;
            font-size: 24px;
            letter-spacing: 1px;
        }

        nav ul {
            list-style: none;
            display: flex;
            gap: 32px;
            margin: 0;
            padding: 0;
        }

        nav ul li a {
            color: var(--putih);
            text-decoration: none;
            font-weight: 500;
            transition: 0.3s;
        }

        nav ul li a:hover,
        nav ul li a.active {
            color: var(--krem);
            border-bottom: 2px solid var(--krem);
            padding-bottom: 4px;
        }

        /* === Main Content === */
        main {
            flex: 1;
            padding: 60px 80px;
            background: linear-gradient(180deg, var(--krem), var(--putih));
        }

        /* === Footer === */
        footer {
            background: var(--coklat-muda);
            color: var(--putih);
            text-align: center;
            padding: 16px;
            font-size: 14px;
            box-shadow: 0 -2px 6px rgba(0,0,0,0.1);
        }

        /* === Button === */
        .btn {
            background: var(--coklat-tua);
            color: white;
            padding: 12px 28px;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
            transition: background 0.3s, transform 0.2s;
        }

        .btn:hover {
            background: var(--coklat-muda);
            transform: translateY(-2px);
        }

        /* === Responsive === */
        @media (max-width: 768px) {
            nav ul {
                display: none;
            }
            nav .menu-toggle {
                display: block;
                font-size: 24px;
                cursor: pointer;
            }
        }
    </style>
</head>

<body>
    {{-- Navbar --}}
    <nav>
        <div class="logo">SITRANSMANIA</div>
        <ul>
            <li><a href="{{ url('/') }}" class="{{ request()->is('/') ? 'active' : '' }}">Beranda</a></li>
            <li><a href="#">Tentang</a></li>
            <li><a href="#">Layanan</a></li>
            <li><a href="#">Kontak</a></li>
        </ul>
        <div class="menu-toggle">
            <i class="fas fa-bars"></i>
        </div>
    </nav>

    {{-- Main Content --}}
    <main>
        @yield('content')
    </main>

    {{-- Footer --}}
    <footer>
        © 2025 SITRANSMANIA | Universitas Negeri Malang
    </footer>
</body>
</html>
