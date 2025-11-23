<div class="sidebar">
    <ul class="list-unstyled">

        <li class="{{ request()->routeIs('pemilik.dashboard') ? 'active' : '' }}">
            <a href="{{ route('pemilik.dashboard') }}">
                <i class="bi bi-speedometer2"></i> Dashboard
            </a>
        </li>

        <li class="{{ request()->routeIs('pemilik.kendaraan.*') ? 'active' : '' }}">
            <a href="{{ route('pemilik.kendaraan.index') }}">
                <i class="bi bi-car-front"></i> Kendaraan Saya
            </a>
        </li>

        <li class="{{ request()->routeIs('pemilik.transaksi.*') ? 'active' : '' }}">
            <a href="{{ route('pemilik.transaksi.index') }}">
                <i class="bi bi-list-check"></i> Riwayat Peminjaman
            </a>
        </li>

        <li>
            <a href="{{ route('logout') }}">
                <i class="bi bi-box-arrow-right"></i> Logout
            </a>
        </li>

    </ul>
</div>
