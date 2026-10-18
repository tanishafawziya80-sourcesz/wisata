<?php

namespace Database\Seeders;

use App\Models\PaketWisata;
use App\Models\User;
use Illuminate\Database\Seeder;

class PaketWisataSeeder extends Seeder
{
    public function run(): void
    {
        // Buat user pegawai
        User::firstOrCreate(
            ['email' => 'pegawai@wisata.com'],
            [
                'name' => 'Pegawai Wisata',
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