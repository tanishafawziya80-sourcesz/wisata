<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PaketWisata;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Hanya buat data paket wisata
        PaketWisata::create([
            'nama_paket' => 'Wisata Bandung Pangalengan',
            'deskripsi'  => 'Paket liburan seru ke perkebunan teh dan pemandian air panas.',
            'harga'      => 350000,
        ]);
    }
}