<?php

namespace App\Http\Controllers\Pelanggan;

use App\Http\Controllers\Controller;
use App\Models\PaketWisata;
use App\Models\Pemesanan;
use App\Models\Pembayaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

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

        /*
        |--------------------------------------------------------------------------
        | TENTUKAN HARGA YANG DIPAKAI
        |--------------------------------------------------------------------------
        */

        if (
            $paketWisata->harga_promo !== null &&
            $paketWisata->harga_promo > 0
        ) {
            $harga = $paketWisata->harga_promo;
        } else {
            $harga = $paketWisata->harga_normal;
        }

        return view(
            'pelanggan.pemesanan.create',
            compact(
                'paketWisata',
                'pelanggan',
                'harga'
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

            'id_paket' => [
                'required',
                'exists:paket_wisata,id_paket'
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
            $request->id_paket
        );


        /*
        |--------------------------------------------------------------------------
        | TENTUKAN HARGA
        |--------------------------------------------------------------------------
        */

        if (
            $paketWisata->harga_promo !== null &&
            $paketWisata->harga_promo > 0
        ) {

            $hargaPerOrang =
                (float) $paketWisata->harga_promo;

        } else {

            $hargaPerOrang =
                (float) $paketWisata->harga_normal;

        }


        /*
        |--------------------------------------------------------------------------
        | JUMLAH PESERTA
        |--------------------------------------------------------------------------
        */

        $jumlahPeserta =
            (int) $request->jumlah_peserta;


        /*
        |--------------------------------------------------------------------------
        | TOTAL
        |--------------------------------------------------------------------------
        */

        $totalHarga =
            $hargaPerOrang *
            $jumlahPeserta;


        /*
        |--------------------------------------------------------------------------
        | KODE BOOKING
        |--------------------------------------------------------------------------
        */

        $kodeBooking =
            'FWZ-' .
            strtoupper(
                Str::random(8)
            );


        /*
        |--------------------------------------------------------------------------
        | SIMPAN PEMESANAN
        |--------------------------------------------------------------------------
        */

        $pemesanan = new Pemesanan();

        $pemesanan->id_pelanggan =
            Auth::user()->id_user;

        $pemesanan->id_paket =
            $paketWisata->id_paket;

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
        | BUAT DATA PEMBAYARAN
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
        | REDIRECT
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