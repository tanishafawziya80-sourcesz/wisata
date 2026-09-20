<?php

namespace App\Http\Controllers\Pegawai;

use App\Http\Controllers\Controller;
use App\Models\DokumenPemesanan;

class DokumenController extends Controller
{
    public function index()
    {
        $dokumen = DokumenPemesanan::with([
            'pemesanan.pelanggan'
        ])
        ->latest('id_dokumen')
        ->get();

        return view('pegawai.dokumen.index', compact('dokumen'));
    }
}