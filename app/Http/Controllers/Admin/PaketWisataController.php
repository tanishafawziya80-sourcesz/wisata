<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PaketWisata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PaketWisataController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | INDEX
    |--------------------------------------------------------------------------
    */

    public function index()
    {
        $paketWisata = PaketWisata::latest()->get();

        return view(
            'paket-wisata.index',
            compact('paketWisata')
        );
    }


    /*
    |--------------------------------------------------------------------------
    | CREATE
    |--------------------------------------------------------------------------
    */

    public function create()
    {
        return view('paket-wisata.create');
    }


    /*
    |--------------------------------------------------------------------------
    | STORE
    |--------------------------------------------------------------------------
    */

    public function store(Request $request)
    {
        $data = $request->validate([
            'nama_paket' => 'required|string|max:255',

            'deskripsi' => 'required|string',

            'akomodasi' => 'required|string|max:255',

            'armada_transport' => 'required|string|max:255',

            'harga_normal' => 'required|numeric',

            'harga_promo' => 'nullable|numeric',

            'status' => 'required|string|max:50',

            'foto_paket' =>
                'required|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);


        /*
        |--------------------------------------------------------------------------
        | UPLOAD FOTO
        |--------------------------------------------------------------------------
        */

        if ($request->hasFile('foto_paket')) {

            $data['foto_paket'] = $request
                ->file('foto_paket')
                ->store('paket-wisata', 'public');
        }


        /*
        |--------------------------------------------------------------------------
        | SIMPAN DATA
        |--------------------------------------------------------------------------
        */

        PaketWisata::create($data);


        return redirect('/admin/paket-wisata')
            ->with(
                'success',
                'Paket wisata berhasil ditambahkan.'
            );
    }


    /*
    |--------------------------------------------------------------------------
    | EDIT
    |--------------------------------------------------------------------------
    */

    public function edit($id)
    {
        $paket = PaketWisata::findOrFail($id);

        return view(
            'paket-wisata.edit',
            compact('paket')
        );
    }


    /*
    |--------------------------------------------------------------------------
    | UPDATE
    |--------------------------------------------------------------------------
    */

    public function update(Request $request, $id)
    {
        $paket = PaketWisata::findOrFail($id);


        $data = $request->validate([
            'nama_paket' => 'required|string|max:255',

            'deskripsi' => 'required|string',

            'akomodasi' => 'required|string|max:255',

            'armada_transport' => 'required|string|max:255',

            'harga_normal' => 'required|numeric',

            'harga_promo' => 'nullable|numeric',

            'status' => 'required|string|max:50',

            'foto_paket' =>
                'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);


        /*
        |--------------------------------------------------------------------------
        | JIKA ADA FOTO BARU
        |--------------------------------------------------------------------------
        */

        if ($request->hasFile('foto_paket')) {

            // Hapus foto lama
            if (
                $paket->foto_paket &&
                Storage::disk('public')->exists(
                    $paket->foto_paket
                )
            ) {
                Storage::disk('public')->delete(
                    $paket->foto_paket
                );
            }


            // Simpan foto baru
            $data['foto_paket'] = $request
                ->file('foto_paket')
                ->store('paket-wisata', 'public');
        }


        /*
        |--------------------------------------------------------------------------
        | UPDATE DATA
        |--------------------------------------------------------------------------
        */

        $paket->update($data);


        return redirect('/admin/paket-wisata')
            ->with(
                'success',
                'Paket wisata berhasil diperbarui.'
            );
    }


    /*
    |--------------------------------------------------------------------------
    | DELETE
    |--------------------------------------------------------------------------
    */

    public function destroy($id)
    {
        $paket = PaketWisata::findOrFail($id);


        /*
        |--------------------------------------------------------------------------
        | HAPUS FOTO
        |--------------------------------------------------------------------------
        */

        if (
            $paket->foto_paket &&
            Storage::disk('public')->exists(
                $paket->foto_paket
            )
        ) {
            Storage::disk('public')->delete(
                $paket->foto_paket
            );
        }


        /*
        |--------------------------------------------------------------------------
        | HAPUS DATA
        |--------------------------------------------------------------------------
        */

        $paket->delete();


        return redirect('/admin/paket-wisata')
            ->with(
                'success',
                'Paket wisata berhasil dihapus.'
            );
    }
}