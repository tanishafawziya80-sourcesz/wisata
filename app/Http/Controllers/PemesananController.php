<?php

namespace App\Http\Controllers\Pelanggan;

use App\Http\Controllers\Controller;
use App\Models\PaketWisata;
use App\Models\Pemesanan;
use App\Models\Pembayaran;
use App\Models\JadwalTour;
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
            'pelanggan',
            'jadwalTour',
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

    public function create($id_paket, $id_jadwal = null)
    {
        $paket = PaketWisata::findOrFail($id_paket);

        /*
        |--------------------------------------------------------------------------
        | AMBIL JADWAL
        |--------------------------------------------------------------------------
        */

        if ($id_jadwal) {

            $jadwal = JadwalTour::where(
                'id_jadwal',
                $id_jadwal
            )
            ->where(
                'id_paket',
                $id_paket
            )
            ->firstOrFail();

        } else {

            $jadwal = JadwalTour::where(
                'id_paket',
                $id_paket
            )
            ->where(
                'tgl_keberangkatan',
                '>=',
                now()
            )
            ->orderBy(
                'tgl_keberangkatan',
                'asc'
            )
            ->first();

            if (!$jadwal) {

                return redirect()
                    ->route('paket-wisata.index')
                    ->with(
                        'error',
                        'Jadwal wisata belum tersedia.'
                    );
            }
        }


        /*
        |--------------------------------------------------------------------------
        | HARGA
        |--------------------------------------------------------------------------
        */

        if (
            $paket->harga_promo !== null &&
            $paket->harga_promo > 0
        ) {

            $harga =
                (float) $paket->harga_promo;

        } else {

            $harga =
                (float) $paket->harga_normal;
        }


        /*
        |--------------------------------------------------------------------------
        | PELANGGAN
        |--------------------------------------------------------------------------
        */

        $pelanggan = Auth::user();


        return view(
            'pelanggan.pemesanan.create',
            compact(
                'paket',
                'jadwal',
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
        | VALIDASI DASAR
        |--------------------------------------------------------------------------
        */

        $request->validate([

            'id_jadwal' => [
                'required',
                'exists:jadwal_tour,id_jadwal'
            ],

            'jumlah_peserta' => [
                'required',
                'integer',
                'min:1'
            ],

            'peserta' => [
                'required',
                'array',
                'min:1'
            ],

            'peserta.*.nama_peserta' => [
                'required',
                'string',
                'max:255'
            ],

            'peserta.*.nik' => [
                'nullable',
                'string',
                'max:30'
            ],

            'peserta.*.usia' => [
                'required',
                'integer',
                'min:1',
                'max:100'
            ],

            'peserta.*.kategori' => [
                'required',
                'in:dewasa,anak'
            ],

            'peserta.*.jenis_kelamin' => [
                'required',
                'in:L,P'
            ],

            'catatan_revisi' => [
                'nullable',
                'string'
            ],

        ]);


        /*
        |--------------------------------------------------------------------------
        | AMBIL JADWAL
        |--------------------------------------------------------------------------
        */

        $jadwal = JadwalTour::findOrFail(
            $request->id_jadwal
        );


        /*
        |--------------------------------------------------------------------------
        | AMBIL PAKET
        |--------------------------------------------------------------------------
        */

        $paketWisata = PaketWisata::findOrFail(
            $jadwal->id_paket
        );


        /*
        |--------------------------------------------------------------------------
        | JUMLAH PESERTA
        |--------------------------------------------------------------------------
        */

        $jumlahPeserta =
            (int) $request->jumlah_peserta;


        /*
        |--------------------------------------------------------------------------
        | CEK DATA PESERTA
        |--------------------------------------------------------------------------
        */

        $peserta =
            $request->input(
                'peserta',
                []
            );


        /*
        |--------------------------------------------------------------------------
        | PASTIKAN JUMLAH SESUAI
        |--------------------------------------------------------------------------
        */

        if (
            count($peserta)
            != $jumlahPeserta
        ) {

            return back()
                ->withInput()
                ->with(
                    'error',
                    'Jumlah data peserta tidak sesuai dengan jumlah peserta.'
                );
        }


        /*
        |--------------------------------------------------------------------------
        | CEK KUOTA
        |--------------------------------------------------------------------------
        */

        if (
            $jumlahPeserta >
            $jadwal->sisa_kuota
        ) {

            return back()
                ->withInput()
                ->with(
                    'error',
                    'Jumlah peserta melebihi sisa kuota.'
                );
        }


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
        | HITUNG TOTAL
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

        $pemesanan =
            new Pemesanan();


        $pemesanan->id_pelanggan =
            Auth::user()->id_user;


        $pemesanan->id_jadwal =
            $jadwal->id_jadwal;


        $pemesanan->kode_booking =
            $kodeBooking;


        $pemesanan->tgl_pemesanan =
            now();


        $pemesanan->jumlah_peserta =
            $jumlahPeserta;


        /*
        |--------------------------------------------------------------------------
        | SIMPAN SEMUA DATA PESERTA
        |--------------------------------------------------------------------------
        */

        $pemesanan->data_peserta =
            $peserta;


        /*
        |--------------------------------------------------------------------------
        | TOTAL BAYAR
        |--------------------------------------------------------------------------
        */

        $pemesanan->total_bayar =
            $totalHarga;


        /*
        |--------------------------------------------------------------------------
        | STATUS
        |--------------------------------------------------------------------------
        */

        $pemesanan->status_pemesanan =
            'menunggu pembayaran';


        /*
        |--------------------------------------------------------------------------
        | CATATAN
        |--------------------------------------------------------------------------
        */

        $pemesanan->catatan_revisi =
            $request->catatan_revisi;


        /*
        |--------------------------------------------------------------------------
        | SAVE
        |--------------------------------------------------------------------------
        */

        $pemesanan->save();


        /*
        |--------------------------------------------------------------------------
        | BUAT PEMBAYARAN
        |--------------------------------------------------------------------------
        */

        $pembayaran =
            new Pembayaran();


        $pembayaran->id_pemesanan =
            $pemesanan->id_pemesanan;


        $pembayaran->status_pembayaran =
            'menunggu';


        $pembayaran->save();


        /*
        |--------------------------------------------------------------------------
        | KEMBALI
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