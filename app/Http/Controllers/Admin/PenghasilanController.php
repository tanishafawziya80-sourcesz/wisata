<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pemesanan;

class PenghasilanController extends Controller
{
    public function index()
    {
        $pemesanan = Pemesanan::with([
            'pelanggan',
            'jadwalTour'
        ])
        ->latest('tgl_pemesanan')
        ->get();

        $totalPemesanan = $pemesanan->count();

        $totalPeserta = $pemesanan->sum('jumlah_peserta');

        $totalPenghasilan = $pemesanan->sum('total_bayar');

        return view('admin.penghasilan.index', compact(
            'pemesanan',
            'totalPemesanan',
            'totalPeserta',
            'totalPenghasilan'
        ));
    }
}