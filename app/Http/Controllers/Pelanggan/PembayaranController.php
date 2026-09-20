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
    | INDEX
    |--------------------------------------------------------------------------
    */

    public function index()
    {
        $pemesanan = Pemesanan::with([
            'paketWisata',
            'pembayaran',
        ])
        ->where(
            'id_pelanggan',
            Auth::user()->id_user
        )
        ->latest('created_at')
        ->get();

        return view(
            'pelanggan.pembayaran.index',
            compact('pemesanan')
        );
    }


    /*
    |--------------------------------------------------------------------------
    | UPLOAD BUKTI
    |--------------------------------------------------------------------------
    */

    public function upload(Request $request)
    {
        $request->validate([

            'id_pemesanan' => [
                'required',
                'exists:pemesanan,id_pemesanan'
            ],

            'bukti_pembayaran' => [
                'required',
                'file',
                'mimes:jpg,jpeg,png,pdf',
                'max:5120'
            ],

        ]);


        $pemesanan = Pemesanan::where(
            'id_pemesanan',
            $request->id_pemesanan
        )
        ->where(
            'id_pelanggan',
            Auth::user()->id_user
        )
        ->firstOrFail();


        $pembayaran =
            Pembayaran::firstOrNew([

                'id_pemesanan' =>
                    $pemesanan->id_pemesanan,

            ]);


        $path =
            $request
                ->file('bukti_pembayaran')
                ->store(
                    'bukti-pembayaran',
                    'public'
                );


        $pembayaran->bukti_pembayaran =
            $path;

        $pembayaran->status_pembayaran =
            'menunggu';

        $pembayaran->save();


        return redirect()
            ->route('pelanggan.pembayaran')
            ->with(
                'success',
                'Bukti pembayaran berhasil dikirim dan sedang diproses.'
            );
    }
}