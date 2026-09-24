<?php

namespace App\Http\Controllers\Pegawai;

use App\Http\Controllers\Controller;
use App\Models\PaketWisata;

class PaketWisataController extends Controller
{
    /**
     * Menampilkan semua paket wisata
     * untuk pegawai.
     */
    public function index()
    {
        $paketWisata = PaketWisata::latest('id_paket')->get();

        return view(
            'pegawai.paket-wisata.index',
            compact('paketWisata')
        );
    }
}