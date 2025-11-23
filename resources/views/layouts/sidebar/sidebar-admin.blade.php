<div class="sidebar">
    <ul class="list-unstyled">

        <li class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
            <a href="{{ route('admin.dashboard') }}">
                <i class="bi bi-speedometer2"></i> Dashboard
            </a>
        </li>

        <li class="{{ request()->routeIs('admin.kendaraan.*') ? 'active' : '' }}">
            <a href="{{ route('admin.kendaraan.index') }}">
                <i class="bi bi-truck"></i> Data Kendaraan
            </a>
        </li>

        <li class="{{ request()->routeIs('admin.pengguna.*') ? 'active' : '' }}">
            <a href="{{ route('admin.pengguna.index') }}">
                <i class="bi bi-people"></i> Data Pengguna
            </a>
        </li>

        <li class="{{ request()->routeIs('admin.transaksi.*') ? 'active' : '' }}">
            <a href="{{ route('admin.transaksi.index') }}">
                <i class="bi bi-receipt"></i> Peminjaman
            </a>
        </li>

        <li>
            <a href="{{ route('logout') }}">
                <i class="bi bi-box-arrow-right"></i> Logout
            </a>
        </li>

    </ul>
</div>
