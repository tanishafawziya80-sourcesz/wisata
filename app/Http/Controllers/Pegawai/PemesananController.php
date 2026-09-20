<?php

namespace App\Http\Controllers\Pelanggan;

use App\Http\Controllers\Controller;
use App\Models\PaketWisata;
use App\Models\Pemesanan;
use App\Models\Pembayaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PemesananController extends Controller
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
            'pelanggan.pemesanan.index',
            compact('pemesanan')
        );
    }


    /*
    |--------------------------------------------------------------------------
    | CREATE
    |--------------------------------------------------------------------------
    */

    public function create($id)
    {
        $paketWisata = PaketWisata::findOrFail($id);

        $pelanggan = Auth::user();

        return view(
            'pelanggan.pemesanan.create',
            compact(
                'paketWisata',
                'pelanggan'
            )
        );
    }


    /*
    |--------------------------------------------------------------------------
    | STORE
    |--------------------------------------------------------------------------
    */

    public function store(Request $request)
    {
        /*
        |--------------------------------------------------------------------------
        | VALIDASI
        |--------------------------------------------------------------------------
        */

        $request->validate([

            'id_paket_wisata' => [
                'required',
                'exists:paket_wisata,id_paket_wisata'
            ],

            'jumlah_peserta' => [
                'required',
                'integer',
                'min:1'
            ],

        ]);


        /*
        |--------------------------------------------------------------------------
        | AMBIL PAKET
        |--------------------------------------------------------------------------
        */

        $paketWisata = PaketWisata::findOrFail(
            $request->id_paket_wisata
        );


        /*
        |--------------------------------------------------------------------------
        | HARGA
        |--------------------------------------------------------------------------
        */

        $hargaPaket = (float) $paketWisata->harga;


        $jumlahPeserta = (int)
            $request->jumlah_peserta;


        /*
        |--------------------------------------------------------------------------
        | TOTAL
        |--------------------------------------------------------------------------
        */

        $totalHarga =
            $hargaPaket *
            $jumlahPeserta;


        /*
        |--------------------------------------------------------------------------
        | KODE BOOKING
        |--------------------------------------------------------------------------
        */

        $kodeBooking =
            'FWZ-' .
            strtoupper(
                substr(
                    md5(
                        uniqid(
                            mt_rand(),
                            true
                        )
                    ),
                    0,
                    8
                )
            );


        /*
        |--------------------------------------------------------------------------
        | SIMPAN PEMESANAN
        |--------------------------------------------------------------------------
        */

        $pemesanan = new Pemesanan();

        $pemesanan->id_pelanggan =
            Auth::user()->id_user;

        $pemesanan->id_paket_wisata =
            $paketWisata->id_paket_wisata;

        $pemesanan->kode_booking =
            $kodeBooking;

        $pemesanan->jumlah_peserta =
            $jumlahPeserta;

        $pemesanan->total_harga =
            $totalHarga;

        $pemesanan->status_pemesanan =
            'menunggu pembayaran';

        $pemesanan->save();


        /*
        |--------------------------------------------------------------------------
        | BUAT DATA PEMBAYARAN OTOMATIS
        |--------------------------------------------------------------------------
        */

        $pembayaran = new Pembayaran();

        $pembayaran->id_pemesanan =
            $pemesanan->id_pemesanan;

        $pembayaran->status_pembayaran =
            'menunggu';

        $pembayaran->save();


        /*
        |--------------------------------------------------------------------------
        | REDIRECT KE PEMBAYARAN
        |--------------------------------------------------------------------------
        */

        return redirect()
            ->route('pelanggan.pembayaran')
            ->with(
                'success',
                'Pemesanan berhasil dibuat. Silakan lanjutkan pembayaran.'
            );
    }
}