<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\JadwalTour;
use App\Models\PaketWisata;
use Illuminate\Http\Request;

class JadwalTourController extends Controller
{
    public function index()
    {
        $jadwal = JadwalTour::with('paketWisata')
            ->orderBy('tgl_keberangkatan', 'asc')
            ->get();

        return view('admin.jadwal.index', compact('jadwal'));
    }

    public function create()
{
    $paketWisata = \App\Models\PaketWisata::all();

    return view('admin.jadwal.create', compact('paketWisata'));
}

    public function store(Request $request)
    {
        $request->validate([
            'id_paket' => 'required',
            'id_tour_leader' => 'required',
            'tgl_keberangkatan' => 'required|date',
            'tgl_kepulangan' => 'required|date|after_or_equal:tgl_keberangkatan',
            'kuota' => 'required|integer|min:1',
        ]);

        JadwalTour::create([
            'id_paket' => $request->id_paket,
            'id_tour_leader' => $request->id_tour_leader,
            'tgl_keberangkatan' => $request->tgl_keberangkatan,
            'tgl_kepulangan' => $request->tgl_kepulangan,
            'kuota' => $request->kuota,
            'sisa_kuota' => $request->kuota,
        ]);

        return redirect('/admin/jadwal-tour')
            ->with('success', 'Jadwal tour berhasil ditambahkan.');
    }

    public function edit($id)
{
    $jadwal = JadwalTour::with('paketWisata')->findOrFail($id);

    $paketWisata = PaketWisata::all();

    return view('admin.jadwal.edit', compact(
        'jadwal',
        'paketWisata'
    ));
}


public function update(Request $request, $id)
{
    $jadwal = JadwalTour::findOrFail($id);

    $request->validate([
        'id_paket' => 'required',
        'id_tour_leader' => 'required',
        'tgl_keberangkatan' => 'required|date',
        'tgl_kepulangan' => 'required|date|after_or_equal:tgl_keberangkatan',
        'kuota' => 'required|integer|min:1',
        'sisa_kuota' => 'required|integer|min:0',
    ]);

    $jadwal->update([
        'id_paket' => $request->id_paket,
        'id_tour_leader' => $request->id_tour_leader,
        'tgl_keberangkatan' => $request->tgl_keberangkatan,
        'tgl_kepulangan' => $request->tgl_kepulangan,
        'kuota' => $request->kuota,
        'sisa_kuota' => $request->sisa_kuota,
    ]);

    return redirect()
        ->route('admin.jadwal-tour.index')
        ->with('success', 'Jadwal tour berhasil diperbarui.');
}


public function destroy($id)
{
    $jadwal = JadwalTour::findOrFail($id);

    $jadwal->delete();

    return redirect()
        ->route('admin.jadwal-tour.index')
        ->with('success', 'Jadwal tour berhasil dihapus.');
}
}