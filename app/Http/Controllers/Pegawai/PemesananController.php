<?php

namespace App\Http\Controllers\Pegawai;

use App\Http\Controllers\Controller;
use App\Models\Pemesanan;

class PemesananController extends Controller
{
    /**
     * Menampilkan seluruh pemesanan pelanggan
     */
    public function index()
    {
        $pemesanan = Pemesanan::with([
            'pelanggan',
            'jadwalTour',
            'dokumenPemesanan',
            'pembayaran',
            'eTicket',
        ])
        ->latest('id_pemesanan')
        ->get();

        return view(
            'pegawai.pemesanan.index',
            compact('pemesanan')
        );
    }


    /**
     * Menampilkan detail satu pemesanan
     */
    public function detail($id)
    {
        $pemesanan = Pemesanan::with([
            'pelanggan',
            'jadwalTour',
            'dokumenPemesanan',
            'pembayaran',
            'eTicket',
        ])
        ->where('id_pemesanan', $id)
        ->firstOrFail();

        return view(
            'pegawai.pemesanan.detail',
            compact('pemesanan')
        );
    }
}