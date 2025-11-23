<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm fixed-top">
    <div class="container">
        <a class="navbar-brand fw-bold" href="{{ route('beranda') }}">
            SITRANSMANIA
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">

                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('beranda') ? 'active fw-bold' : '' }}"
                    href="{{ route('beranda') }}">Beranda</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('tentang') ? 'active fw-bold' : '' }}"
                    href="{{ route('tentang') }}">Tentang</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('layanan') ? 'active fw-bold' : '' }}"
                    href="{{ route('layanan') }}">Layanan</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('kontak') ? 'active fw-bold' : '' }}"
                    href="{{ route('kontak') }}">Kontak</a>
                </li>

            </ul>
        </div>
    </div>
</nav>
