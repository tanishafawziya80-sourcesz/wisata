<?php

namespace App\Http\Controllers\Pelanggan;

use App\Http\Controllers\Controller;
use App\Models\Pemesanan;
use App\Models\Pembayaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PembayaranController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | HALAMAN PEMBAYARAN
    |--------------------------------------------------------------------------
    */

    public function index()
    {
        $pemesanan = Pemesanan::with([
    'pelanggan',
    'jadwalTour',
    'pembayaran',
])
        ->where(
            'id_pelanggan',
            Auth::user()->id_user
        )
        ->latest('id_pemesanan')
        ->get();

        return view(
            'pelanggan.pembayaran.index',
            compact('pemesanan')
        );
    }


    /*
    |--------------------------------------------------------------------------
    | SIMPAN PEMBAYARAN
    |--------------------------------------------------------------------------
    */

    public function store(Request $request)
    {
        $data = $request->validate([

            'id_pemesanan' => [
                'required',
                'exists:pemesanan,id_pemesanan'
            ],

            'metode_pembayaran' => [
                'required',
                'string',
                'in:transfer_bank,qris,e_wallet'
            ],

            'bukti_pembayaran' => [
                'required',
                'file',
                'mimes:jpg,jpeg,png,pdf',
                'max:5120'
            ],

        ]);


        /*
        |--------------------------------------------------------------------------
        | PASTIKAN PESANAN MILIK PELANGGAN
        |--------------------------------------------------------------------------
        */

        $pemesanan = Pemesanan::where(
            'id_pemesanan',
            $data['id_pemesanan']
        )
        ->where(
            'id_pelanggan',
            Auth::user()->id_user
        )
        ->firstOrFail();


        /*
        |--------------------------------------------------------------------------
        | UPLOAD BUKTI PEMBAYARAN
        |--------------------------------------------------------------------------
        */

        $path = $request
            ->file('bukti_pembayaran')
            ->store(
                'bukti-pembayaran',
                'public'
            );


        /*
        |--------------------------------------------------------------------------
        | SIMPAN DATA PEMBAYARAN
        |--------------------------------------------------------------------------
        */

        Pembayaran::updateOrCreate(

            [
                'id_pemesanan' =>
                    $pemesanan->id_pemesanan,
            ],

            [
                'metode_pembayaran' =>
                    $data['metode_pembayaran'],

                'status_pembayaran' =>
                    'menunggu',

                'bukti_pembayaran' =>
                    $path,
            ]

        );


        /*
        |--------------------------------------------------------------------------
        | KEMBALI KE HALAMAN PEMBAYARAN
        |--------------------------------------------------------------------------
        */

        return redirect()
            ->route('pelanggan.pembayaran')
            ->with(
                'success',
                'Pembayaran berhasil dikirim. Silakan menunggu persetujuan pegawai.'
            );
    }


    /*
    |--------------------------------------------------------------------------
    | UPLOAD BUKTI — UNTUK KOMPATIBILITAS ROUTE LAMA
    |--------------------------------------------------------------------------
    */

    public function upload(Request $request)
    {
        return $this->store($request);
    }
}