<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PaketWisata;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        PaketWisata::create([
            'nama_paket'       => 'Makkah Dan Madinah',
            'deskripsi'        => 'PAKET 2 ORANG 9 HARI. Hari 1-3: Menetap di Madinah, Mendarat di Arab Saudi. Beribadah di Masjid Nabawi.',
            'akomodasi'        => 'Hotel Bintang 5',
            'armada_transport' => 'Pesawat & Bus Executive',
            'harga_normal'     => 35200000,
            'harga_promo'      => 32000000,
            'status'           => 'Tersedia',
        ]);

        PaketWisata::create([
            'nama_paket'       => 'Hong Kong NPH',
            'deskripsi'        => 'Hari 1: Tiba di Hong Kong & City Lights. Hari 2: Pemandangan Kota & Pusat Belanja. Hari 3: Seharian di Hong Kong Disneyland.',
            'akomodasi'        => 'Hotel Bintang 4',
            'armada_transport' => 'Bus Kota & Bus Namsan Sunhwan',
            'harga_normal'     => 34600000,
            'harga_promo'      => 33800000,
            'status'           => 'Tersedia',
        ]);

        PaketWisata::create([
            'nama_paket'       => 'Korea Selatan NPH',
            'deskripsi'        => 'Hari 1: Tiba di Seoul. Hari 2: Jelajah Seoul Klasik & Budaya. Hari 3: Pusat Belanja & Landmark Kota.',
            'akomodasi'        => 'Hotel Bintang 4',
            'armada_transport' => 'Bus Pariwisata',
            'harga_normal'     => 900000,
            'harga_promo'      => 850000,
            'status'           => 'Tersedia',
        ]);

        PaketWisata::create([
            'nama_paket'       => 'Danau Toba',
            'deskripsi'        => 'Menikmati keindahan alam Danau Toba dan kebudayaan suku Batak yang kaya.',
            'akomodasi'        => 'Hotel Bintang 4',
            'armada_transport' => 'Kapal Feri & Bus Pariwisata',
            'harga_normal'     => 36000000,
            'harga_promo'      => 35200000,
            'status'           => 'Tersedia',
        ]);

        PaketWisata::create([
            'nama_paket'       => 'Gunung Rinjani',
            'deskripsi'        => 'Pendakian seru menaklukkan puncak Gunung Rinjani dengan pemandangan danau Segara Anak.',
            'akomodasi'        => 'Tenda & Resort Basecamp',
            'armada_transport' => 'Bus Pariwisata',
            'harga_normal'     => 34600000,
            'harga_promo'      => 33800000,
            'status'           => 'Tersedia',
        ]);

        PaketWisata::create([
            'nama_paket'       => 'Pantai Kuta',
            'deskripsi'        => 'Nikmati keindahan sunset dan pantai berpasir putih favorit wisatawan di Bali.',
            'akomodasi'        => 'Resort Bintang 4',
            'armada_transport' => 'Bus Pariwisata',
            'harga_normal'     => 900000,
            'harga_promo'      => 850000,
            'status'           => 'Tersedia',
        ]);
    }
}