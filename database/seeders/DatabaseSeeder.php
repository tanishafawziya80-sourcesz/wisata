<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PaketWisata;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        PaketWisata::create([
    'nama_paket'       => 'Wisata Bandung Pangalengan',
    'deskripsi'        => 'Paket liburan seru ke perkebunan teh dan pemandian air panas.',
    'akomodasi'        => 'Hotel Bintang 3',
    'armada_transport' => 'Bus Pariwisata',
    'harga_normal'     => 400000,
    'harga_promo'      => 350000,
    'status'           => 'Tersedia',
]);
    }
}