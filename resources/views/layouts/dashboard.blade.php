<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dashboard | SITRANSMANIA')</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --brown-dark: #4e342e;
            --brown-light: #8d6e63;
            --cream: #f5f0ea;
            --white: #ffffff;
        }

        body {
            margin: 0;
            font-family: "Inter", sans-serif;
            background: var(--cream);
            display: flex;
            height: 100vh;
            color: var(--brown-dark);
            overflow: hidden;
        }

        /* === SIDEBAR === */
        .sidebar {
            width: 250px;
            background: var(--brown-dark);
            color: white;
            display: flex;
            flex-direction: column;
            padding: 24px;
        }

        .sidebar .brand {
            font-size: 22px;
            font-weight: 700;
            margin-bottom: 32px;
            text-align: center;
            letter-spacing: 1px;
        }

        .menu {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .menu a {
            color: white;
            text-decoration: none;
            padding: 12px 16px;
            border-radius: 8px;
            transition: all 0.2s;
            font-size: 15px;
        }

        .menu a:hover,
        .menu a.active {
            background: var(--brown-light);
        }

        .logout {
            margin-top: auto;
            padding-top: 20px;
            border-top: 1px solid rgba(255, 255, 255, 0.2);
        }

        .logout a {
            color: #ffccbc;
            text-decoration: none;
            font-weight: 600;
        }

        /* === MAIN CONTENT === */
        .main {
            flex: 1;
            display: flex;
            flex-direction: column;
            background: var(--cream);
            overflow-y: auto;
        }

        /* === NAVBAR === */
        .navbar {
            background: var(--white);
            padding: 16px 24px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .navbar h2 {
            margin: 0;
            font-size: 20px;
            color: var(--brown-dark);
        }

        .user-info {
            display: flex;
            align-items: center;
            gap: 12px;
            color: var(--brown-dark);
        }

        .user-info img {
            width: 38px;
            height: 38px;
            border-radius: 50%;
            background: #e0d6cf;
            object-fit: cover;
        }

        /* === CONTENT AREA === */
        .content {
            padding: 28px 36px;
        }

        footer {
            text-align: center;
            padding: 14px;
            font-size: 13px;
            color: #6d4c41;
            background: #f8f6f4;
            margin-top: auto;
        }

        @media (max-width: 900px) {
            .sidebar {
                display: none;
            }
        }
    </style>
</head>

<body>

    <!-- SIDEBAR -->
    <aside class="sidebar">
        <div class="brand">SITRANSMANIA</div>
        <nav class="menu">
            <a href="{{ route('beranda') }}" class="active">🏠 Beranda</a>
            <a href="#">🚗 Transportasi</a>
            <a href="#">📊 Aktivitas</a>
            <a href="#">💬 Chat</a>
            <a href="#">👤 Akun</a>
            <a href="#">📜 Riwayat</a>
            <a href="#">⚙️ Lainnya</a>
        </nav>

        <div class="logout">
            <a href="{{ route('logout') }}">Keluar</a>
        </div>
    </aside>

    <!-- MAIN AREA -->
    <div class="main">
        <div class="navbar">
            <h2>@yield('page_title', 'Dashboard')</h2>
            <div class="user-info">
                <span>
                    {{ Auth::user()->role == 'admin' ? '(Admin)' : (Auth::user()->role == 'pemilik' ? '(Pemilik)' : '(Peminjam)') }}
                </span>
                <img src="https://cdn-icons-png.flaticon.com/512/847/847969.png" alt="User Avatar">
            </div>
        </div>

        <div class="content">
            @yield('content')
        </div>

        <footer>
            © 2025 SITRANSMANIA | Universitas Negeri Malang
        </footer>
    </div>

</body>

</html>
