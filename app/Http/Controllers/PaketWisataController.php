<?php

namespace App\Http\Controllers;

use App\Models\PaketWisata;
use Illuminate\Http\Request;
use App\Models\JadwalTour;

class PaketWisataController extends Controller
{
    public function index()
    {
        $paketWisata = PaketWisata::with('jadwalTour')->get();

        return view('paket-wisata.index', compact('paketWisata'));
    }


    public function store(Request $request)
    {
        // Hanya admin yang boleh menambah paket
        if (auth()->user()->role !== 'admin') {
            abort(403, 'Akses hanya untuk admin.');
        }


        $request->validate([
            'nama_paket' => 'required',
            'deskripsi' => 'required',
            'akomodasi' => 'required',
            'armada_transport' => 'required',
            'harga_normal' => 'required|numeric',
            'harga_promo' => 'nullable|numeric',
            'status' => 'required',
        ]);


        PaketWisata::create([
            'nama_paket' => $request->nama_paket,
            'deskripsi' => $request->deskripsi,
            'akomodasi' => $request->akomodasi,
            'armada_transport' => $request->armada_transport,
            'harga_normal' => $request->harga_normal,
            'harga_promo' => $request->harga_promo,
            'status' => $request->status,
        ]);


        return redirect('/paket-wisata')
            ->with('success', 'Paket wisata berhasil ditambahkan!');
    }

    public function jadwalTour()
{
    return $this->hasMany(
        JadwalTour::class,
        'id_paket',
        'id_paket'
    );
}
}