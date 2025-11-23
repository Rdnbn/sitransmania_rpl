<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $now = Carbon::now();

        DB::table('users')->insert([
            // ============================
            // ADMIN
            // ============================
            [
                'id_user'       => null,
                'nama'          => 'Admin Demo',
                'email'         => 'admindemo@sitransmania.com',
                'password'      => Hash::make('admindemo'),
                'no_telp'       => '081259128853',
                'role'          => 'admin',
                'jenis_kelamin' => 'P',
                'asrama'        => 'Dahlia',
                'kamar'         => '101',
                'prodi'         => 'S1 Pendidikan Teknik Informatika',
                'angkatan'      => '2024',
                'foto_profil'   => null,
                'status_akun'   => 'aktif',
                'created_at'    => $now,
                'updated_at'    => $now,
            ],

            // ============================
            // PEMILIK
            // ============================
            [
                'id_user'       => null,
                'nama'          => 'Pemilik Kendaraan',
                'email'         => 'pemilik@sitransmania.com',
                'password'      => Hash::make('pemilik123'),
                'no_telp'       => '082233445566',
                'role'          => 'pemilik',
                'jenis_kelamin' => 'L',
                'asrama'        => 'Gedung B',
                'kamar'         => '202',
                'prodi'         => 'Sistem Informasi',
                'angkatan'      => '2021',
                'foto_profil'   => null,
                'status_akun'   => 'aktif',
                'created_at'    => $now,
                'updated_at'    => $now,
            ],

            // ============================
            // PEMINJAM
            // ============================
            [
                'id_user'       => null,
                'nama'          => 'Peminjam Kendaraan',
                'email'         => 'peminjam@sitransmania.com',
                'password'      => Hash::make('peminjam123'),
                'no_telp'       => '083344556677',
                'role'          => 'peminjam',
                'jenis_kelamin' => 'P',
                'asrama'        => 'Gedung C',
                'kamar'         => '303',
                'prodi'         => 'Manajemen Informatika',
                'angkatan'      => '2023',
                'foto_profil'   => null,
                'status_akun'   => 'aktif',
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
        ]);
    }
}
