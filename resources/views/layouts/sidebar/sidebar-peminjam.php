<div class="sidebar">
    <ul class="list-unstyled">

        <li class="{{ request()->routeIs('peminjam.dashboard') ? 'active' : '' }}">
            <a href="{{ route('peminjam.dashboard') }}">
                <i class="bi bi-speedometer2"></i> Dashboard
            </a>
        </li>

        <li class="{{ request()->routeIs('peminjam.kendaraan.*') ? 'active' : '' }}">
            <a href="{{ route('peminjam.kendaraan.index') }}">
                <i class="bi bi-search"></i> Cari Kendaraan
            </a>
        </li>

        <li class="{{ request()->routeIs('peminjam.pinjam.*') ? 'active' : '' }}">
            <a href="{{ route('peminjam.pinjam.index') }}">
                <i class="bi bi-clock-history"></i> Status Peminjaman
            </a>
        </li>

        <li>
            <a href="{{ route('logout') }}">
                <i class="bi bi-box-arrow-right"></i> Logout
            </a>
        </li>

    </ul>
</div>
