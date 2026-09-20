<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\PaketWisata;
use App\Models\JadwalTour;
use App\Models\Pemesanan;

class SystemController extends Controller
{
    public function index()
    {
        $totalPengguna = User::count();

        $totalPaket = PaketWisata::count();

        $totalJadwal = JadwalTour::count();

        $totalPemesanan = Pemesanan::count();

        return view('admin.sistem.index', compact(
            'totalPengguna',
            'totalPaket',
            'totalJadwal',
            'totalPemesanan'
        ));
    }
}