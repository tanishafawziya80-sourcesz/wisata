<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\PaketWisata;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Buat user pegawai (tanpa kolom 'name' yang bikin error)
        User::firstOrCreate(
            ['email' => 'pegawai@wisata.com'],
            [
                'password' => bcrypt('password123'),
                'role' => 'pegawai',
            ]
        );

        // Buat data paket wisata
        PaketWisata::create([
            'nama_paket' => 'Wisata Bandung Pangalengan',
            'deskripsi' => 'Paket liburan seru ke perkebunan teh dan pemandian air panas.',
            'harga' => 350000,
        ]);
    }
}