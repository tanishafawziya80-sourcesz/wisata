<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pemesanan;

class PemesananController extends Controller
{
    public function index()
    {
        $pemesanan = Pemesanan::with([
            'pelanggan',
            'jadwalTour'
        ])
        ->latest('id_pemesanan')
        ->get();

        return view(
            'admin.pemesanan.index',
            compact('pemesanan')
        );
    }
}