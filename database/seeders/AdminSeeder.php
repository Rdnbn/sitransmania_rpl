<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'nama' => 'Administrator',
            'email' => 'admin@sitransmania.com',
            'password' => Hash::make('mantappp'),
            'role' => 'admin',
            'no_telp' => '081234567890',
            'jenis_kelamin' => 'L',
            'status_akun' => 'aktif',
        ]);
    }
}
