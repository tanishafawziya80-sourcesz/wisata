<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PaketWisata;
use Illuminate\Http\Request;

class PaketWisataController extends Controller
{
    public function index()
    {
        $paketWisata = PaketWisata::latest()->get();

        return view('paket-wisata.index', compact('paketWisata'));
    }


    public function create()
    {
        return view('paket-wisata.create');
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_paket' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'akomodasi' => 'required|string|max:255',
            'armada_transport' => 'required|string|max:255',
            'harga_normal' => 'required|numeric|min:0',
            'harga_promo' => 'nullable|numeric|min:0',
            'status' => 'required|in:tersedia,tidak tersedia',
            'foto_paket' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);


        if ($request->hasFile('foto_paket')) {
    $validated['foto_paket'] = $request
        ->file('foto_paket')
        ->store('paket-wisata', 'public');
}


        PaketWisata::create($validated);


        return redirect()
            ->route('admin.paket-wisata.index')
            ->with(
                'success',
                'Paket wisata berhasil ditambahkan.'
            );
    }


    public function edit($id)
{
    $paket = PaketWisata::findOrFail($id);

    return view('paket-wisata.edit', compact('paket'));
}

    public function update(
    Request $request,
    $id
) {
    $paketWisata = PaketWisata::findOrFail($id);

    $validated = $request->validate([
        'nama_paket' => 'required|string|max:255',
        'deskripsi' => 'required|string',
        'akomodasi' => 'required|string|max:255',
        'armada_transport' => 'required|string|max:255',
        'harga_normal' => 'required|numeric|min:0',
        'harga_promo' => 'nullable|numeric|min:0',
        'status' => 'required|in:tersedia,tidak tersedia',
        'foto_paket' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
    ]);

    if ($request->hasFile('foto_paket')) {
    $validated['foto_paket'] = $request
        ->file('foto_paket')
        ->store('paket-wisata', 'public');
}

    $paketWisata->update($validated);

    return redirect()
        ->route('admin.paket-wisata.index')
        ->with(
            'success',
            'Paket wisata berhasil diperbarui.'
        );
}


    public function destroy($id)
{
    $paketWisata = PaketWisata::findOrFail($id);

    $paketWisata->delete();

    return redirect()
        ->route('admin.paket-wisata.index')
        ->with(
            'success',
            'Paket wisata berhasil dihapus.'
        );
}
}