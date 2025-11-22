<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LogoutController;

/*
|--------------------------------------------------------------------------
| ADMIN
|--------------------------------------------------------------------------
*/
use App\Http\Controllers\Admin\DashboardController as AdminDashboard;
use App\Http\Controllers\Admin\AkunController as AdminAkun;
use App\Http\Controllers\Admin\RiwayatController as AdminRiwayat;
use App\Http\Controllers\Admin\LainnyaController as AdminLainnya;
use App\Http\Controllers\Admin\KendaraanController as AdminKendaraan;
use App\Http\Controllers\Admin\AktivitasController as AdminAktivitas;
use App\Http\Controllers\Admin\PeminjamanController as AdminPeminjaman;
use App\Http\Controllers\Admin\NotifikasiController as AdminNotifikasi;
use App\Http\Controllers\Admin\UserController as AdminUser;
use App\Http\Controllers\Admin\LiveMapController as AdminLiveMap;

/*
|--------------------------------------------------------------------------
| PEMILIK
|--------------------------------------------------------------------------
*/
use App\Http\Controllers\Pemilik\DashboardController as PemilikDashboard;
use App\Http\Controllers\Pemilik\KendaraanController as PemilikKendaraan;
use App\Http\Controllers\Pemilik\AktivitasController as PemilikAktivitas;
use App\Http\Controllers\Pemilik\PeminjamanController as PemilikPeminjaman;
use App\Http\Controllers\Pemilik\PembayaranController as PemilikPembayaran;
use App\Http\Controllers\Pemilik\LiveMapController as PemilikLiveMap;
use App\Http\Controllers\Pemilik\LainnyaController as PemilikLainnya;
// use App\Http\Controllers\Pemilik\ChattController as PemilikChatt; // Controller tidak ada

/*
|--------------------------------------------------------------------------
| PEMINJAM
|--------------------------------------------------------------------------
*/
use App\Http\Controllers\Peminjam\DashboardController as PeminjamDashboard;
use App\Http\Controllers\Peminjam\KendaraanController as PeminjamKendaraan;
use App\Http\Controllers\Peminjam\PembayaranController as PeminjamPembayaran;
// use App\Http\Controllers\Peminjam\ChattController as PeminjamChatt; // Controller tidak ada
use App\Http\Controllers\Peminjam\PeminjamanController as PeminjamPeminjaman;
use App\Http\Controllers\Peminjam\LainnyaController as PeminjamLainnya;

// use App\Http\Controllers\LiveMapController; // Controller tidak ada


/*
|--------------------------------------------------------------------------
| PUBLIC ROUTES
|--------------------------------------------------------------------------
*/

Route::get('/', [LandingController::class, 'index'])->name('landing');
Route::get('/tentang', [LandingController::class, 'tentang'])->name('tentang');
Route::get('/layanan', [LandingController::class, 'layanan'])->name('layanan');
Route::get('/kontak', [LandingController::class, 'kontak'])->name('kontak');
Route::get('/beranda', [LandingController::class, 'beranda'])->name('beranda');
/*
|--------------------------------------------------------------------------
| AUTH
|--------------------------------------------------------------------------
*/
/// Halaman tamu (belum login)
Route::middleware('guest')->group(function () {

    // LOGIN
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'login'])->name('login.submit');

    // REGISTER
    Route::get('/register', [RegisterController::class, 'index'])->name('register');
    Route::post('/register', [RegisterController::class, 'store'])->name('register.store');
});

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
// Halaman yang butuh autentikasi
Route::middleware('auth')->group(function () {

    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

    // Dashboard sudah ada di group masing-masing role di bawah
});

/*
|--------------------------------------------------------------------------
| ADMIN ROUTES
|--------------------------------------------------------------------------
*/

Route::middleware(['auth', 'role:admin'])
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {

        Route::get('/dashboard', [AdminDashboard::class, 'index'])->name('dashboard');

        Route::get('/akun', [AdminAkun::class, 'index'])->name('akun.index');
        Route::post('/akun/store', [AdminAkun::class, 'store'])->name('akun.store');
        Route::get('/akun/delete/{id}', [AdminAkun::class, 'destroy'])->name('akun.delete');
        Route::post('/akun/reset-password/{id}', [AdminAkun::class, 'reset'])->name('akun.reset');

        Route::get('/riwayat', [AdminRiwayat::class, 'index'])->name('riwayat.index');

        Route::get('/pengaturan', [AdminLainnya::class, 'settings'])->name('settings');
        Route::get('/laporan', [AdminLainnya::class, 'laporan'])->name('laporan');
    });

/*
|--------------------------------------------------------------------------
| PEMILIK ROUTES
|--------------------------------------------------------------------------
*/
Route::middleware(['auth', 'role:pemilik'])
    ->prefix('pemilik')
    ->name('pemilik.')
    ->group(function () {
        Route::get('/dashboard', [PemilikDashboard::class, 'index'])->name('dashboard');

        Route::get('/kendaraan', [PemilikKendaraan::class, 'index'])->name('kendaraan.index');
        Route::post('/kendaraan/store', [PemilikKendaraan::class, 'store'])->name('kendaraan.store');
        Route::post('/kendaraan/status/{id}', [PemilikKendaraan::class, 'updateStatus'])->name('kendaraan.status');

        Route::get('/aktivitas', [PemilikAktivitas::class, 'index'])->name('aktivitas.index');
        Route::get('/aktivitas/live-map/{id}', [PemilikLiveMap::class, 'index'])->name('live-map');

        // Route::get('/chatt', [PemilikChatt::class, 'index'])->name('chatt.index'); // Controller tidak ada

        Route::get('/pengaturan', [PemilikLainnya::class, 'settings'])->name('settings');
    });

/*
|--------------------------------------------------------------------------
| PEMINJAM ROUTES
|--------------------------------------------------------------------------
*/
Route::middleware(['auth', 'role:peminjam'])
    ->prefix('peminjam')
    ->name('peminjam.')
    ->group(function () {

        Route::get('/dashboard', [PeminjamDashboard::class, 'index'])->name('dashboard');

        Route::get('/kendaraan', [PeminjamKendaraan::class, 'index'])->name('kendaraan.index');
        Route::get('/kendaraan/pinjam/{id}', [PeminjamKendaraan::class, 'formPinjam'])->name('kendaraan.pinjam');
        Route::post('/kendaraan/pinjam/{id}', [PeminjamKendaraan::class, 'submitPinjam'])->name('kendaraan.submit');

        Route::get('/pembayaran', [PeminjamPembayaran::class, 'index'])->name('pembayaran.index');
        Route::post('/pembayaran/upload', [PeminjamPembayaran::class, 'upload'])->name('pembayaran.upload');

        // Route::get('/chatt', [PeminjamChatt::class, 'index'])->name('chatt.index'); // Controller tidak ada

        Route::get('/pengaturan', [PeminjamLainnya::class, 'settings'])->name('settings');
    });

/*
|--------------------------------------------------------------------------
| LIVE MAP GLOBAL (jika dipakai)
|--------------------------------------------------------------------------
*/
// Route::get('/live-map/data/{id}', [LiveMapController::class, 'fetchLocation'])->name('live-map.data'); // Controller tidak ada
