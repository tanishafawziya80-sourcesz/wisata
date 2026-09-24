<?php

namespace App\Http\Controllers\Pegawai;

use App\Http\Controllers\Controller;
use App\Models\Pemesanan;

class DokumenController extends Controller
{
    public function index()
    {
        $pemesanan = Pemesanan::with([
            'pelanggan',
            'jadwalTour',
            'peserta',
        ])
            ->latest('created_at')
            ->get();

        return view(
            'pegawai.dokumen.index',
            compact('pemesanan')
        );
    }
}