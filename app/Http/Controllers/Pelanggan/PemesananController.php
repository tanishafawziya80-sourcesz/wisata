<?php

namespace App\Http\Controllers\Pelanggan;

use App\Http\Controllers\Controller;
use App\Models\PaketWisata;
use App\Models\Pemesanan;
use App\Models\Pembayaran;
use App\Models\JadwalTour;
use App\Models\PesertaPemesanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
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
            'peserta',
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
        /*
        |--------------------------------------------------------------------------
        | AMBIL PAKET WISATA
        |--------------------------------------------------------------------------
        */

        $paket = PaketWisata::where(
            'id_paket',
            $id_paket
        )->firstOrFail();


        /*
        |--------------------------------------------------------------------------
        | AMBIL JADWAL
        |--------------------------------------------------------------------------
        */

        if ($id_jadwal) {

            /*
            |--------------------------------------------------------------------------
            | JIKA PELANGGAN MEMILIH JADWAL TERTENTU
            |--------------------------------------------------------------------------
            */

            $jadwal = JadwalTour::where(
                'id_jadwal',
                $id_jadwal
            )
                ->where(
                    'id_paket',
                    $id_paket
                )
                ->firstOrFail();


            /*
            |--------------------------------------------------------------------------
            | JIKA SISA KUOTA NULL
            |--------------------------------------------------------------------------
            |
            | Jika admin hanya mengisi kuota,
            | otomatis gunakan kuota sebagai sisa kuota.
            |
            */

            if (
                $jadwal->sisa_kuota === null
                && $jadwal->kuota !== null
            ) {

                $jadwal->sisa_kuota =
                    $jadwal->kuota;

                $jadwal->save();
            }


            /*
            |--------------------------------------------------------------------------
            | CEK JADWAL SUDAH LEWAT
            |--------------------------------------------------------------------------
            */

            if (
                $jadwal->tgl_keberangkatan
                && $jadwal->tgl_keberangkatan < now()
            ) {

                return redirect()
                    ->route('paket-wisata.index')
                    ->with(
                        'error',
                        'Jadwal wisata tersebut sudah lewat.'
                    );
            }


            /*
            |--------------------------------------------------------------------------
            | CEK KUOTA
            |--------------------------------------------------------------------------
            */

            if (
                (int) $jadwal->sisa_kuota <= 0
            ) {

                return redirect()
                    ->route('paket-wisata.index')
                    ->with(
                        'error',
                        'Kuota untuk jadwal wisata tersebut sudah penuh.'
                    );
            }

        } else {

            /*
            |--------------------------------------------------------------------------
            | CARI JADWAL TERDEKAT
            |--------------------------------------------------------------------------
            */

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
                ->get()
                ->first(function ($item) {

                    /*
                    |--------------------------------------------------------------------------
                    | OTOMATIS ISI SISA KUOTA
                    |--------------------------------------------------------------------------
                    */

                    if (
                        $item->sisa_kuota === null
                        && $item->kuota !== null
                    ) {

                        $item->sisa_kuota =
                            $item->kuota;

                        $item->save();
                    }


                    /*
                    |--------------------------------------------------------------------------
                    | CARI YANG MASIH TERSEDIA
                    |--------------------------------------------------------------------------
                    */

                    return (int) $item->sisa_kuota > 0;
                });


            /*
            |--------------------------------------------------------------------------
            | JIKA TIDAK ADA JADWAL
            |--------------------------------------------------------------------------
            */

            if (!$jadwal) {

                return redirect()
                    ->route('paket-wisata.index')
                    ->with(
                        'error',
                        'Jadwal wisata belum tersedia atau kuota sudah penuh.'
                    );
            }
        }


        /*
        |--------------------------------------------------------------------------
        | TENTUKAN HARGA
        |--------------------------------------------------------------------------
        */

        if (
            $paket->harga_promo !== null
            && $paket->harga_promo > 0
        ) {

            $harga =
                (float) $paket->harga_promo;

        } else {

            $harga =
                (float) $paket->harga_normal;
        }


        /*
        |--------------------------------------------------------------------------
        | DATA PELANGGAN
        |--------------------------------------------------------------------------
        */

        $pelanggan =
            Auth::user();


        /*
        |--------------------------------------------------------------------------
        | TAMPILKAN FORM PEMESANAN
        |--------------------------------------------------------------------------
        */

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
        | VALIDASI
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

            'peserta.*.file_identitas' => [
                'required',
                'file',
                'mimes:jpg,jpeg,png,pdf',
                'max:5120'
            ],

            'catatan_revisi' => [
                'nullable',
                'string'
            ],

        ]);


        /*
        |--------------------------------------------------------------------------
        | TRANSACTION
        |--------------------------------------------------------------------------
        */

        DB::transaction(function () use ($request) {

            /*
            |--------------------------------------------------------------------------
            | AMBIL JADWAL DENGAN LOCK
            |--------------------------------------------------------------------------
            */

            $jadwal = JadwalTour::where(
                'id_jadwal',
                $request->id_jadwal
            )
                ->lockForUpdate()
                ->firstOrFail();


            /*
            |--------------------------------------------------------------------------
            | AMBIL PAKET
            |--------------------------------------------------------------------------
            */

            $paketWisata =
                PaketWisata::where(
                    'id_paket',
                    $jadwal->id_paket
                )->firstOrFail();


            /*
            |--------------------------------------------------------------------------
            | JUMLAH PESERTA
            |--------------------------------------------------------------------------
            */

            $jumlahPeserta =
                (int) $request->jumlah_peserta;


            /*
            |--------------------------------------------------------------------------
            | DATA PESERTA
            |--------------------------------------------------------------------------
            */

            $peserta =
                $request->input(
                    'peserta',
                    []
                );


            /*
            |--------------------------------------------------------------------------
            | PASTIKAN JUMLAH DATA PESERTA SESUAI
            |--------------------------------------------------------------------------
            */

            if (
                count($peserta)
                != $jumlahPeserta
            ) {

                abort(
                    422,
                    'Jumlah data peserta tidak sesuai dengan jumlah peserta.'
                );
            }


            /*
            |--------------------------------------------------------------------------
            | OTOMATIS ISI SISA KUOTA
            |--------------------------------------------------------------------------
            */

            if (
                $jadwal->sisa_kuota === null
                && $jadwal->kuota !== null
            ) {

                $jadwal->sisa_kuota =
                    $jadwal->kuota;

                $jadwal->save();
            }


            /*
            |--------------------------------------------------------------------------
            | CEK KUOTA
            |--------------------------------------------------------------------------
            */

            if (
                $jumlahPeserta >
                (int) $jadwal->sisa_kuota
            ) {

                abort(
                    422,
                    'Jumlah peserta melebihi sisa kuota.'
                );
            }


            /*
            |--------------------------------------------------------------------------
            | TENTUKAN HARGA
            |--------------------------------------------------------------------------
            */

            if (
                $paketWisata->harga_promo !== null
                && $paketWisata->harga_promo > 0
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
            | BUAT PEMESANAN
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
            | DATA PESERTA
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
            | SIMPAN PEMESANAN
            |--------------------------------------------------------------------------
            */

            $pemesanan->save();


            /*
            |--------------------------------------------------------------------------
            | KURANGI SISA KUOTA
            |--------------------------------------------------------------------------
            */

            $jadwal->sisa_kuota =
                (int) $jadwal->sisa_kuota
                - $jumlahPeserta;


            $jadwal->save();


            /*
            |--------------------------------------------------------------------------
            | SIMPAN PESERTA
            |--------------------------------------------------------------------------
            */

            foreach (
                $peserta as $index => $dataPeserta
            ) {

                /*
                |--------------------------------------------------------------------------
                | FILE IDENTITAS
                |--------------------------------------------------------------------------
                */

                $file =
                    $request->file(
                        "peserta.$index.file_identitas"
                    );


                $namaFile =
                    null;


                if ($file) {

                    $namaFile =
                        $file->store(
                            'identitas_peserta',
                            'public'
                        );
                }


                /*
                |--------------------------------------------------------------------------
                | SIMPAN PESERTA
                |--------------------------------------------------------------------------
                */

                PesertaPemesanan::create([

                    'id_pemesanan' =>
                        $pemesanan->id_pemesanan,

                    'nama_peserta' =>
                        $dataPeserta['nama_peserta'],

                    'nik' =>
                        $dataPeserta['nik'] ?? null,

                    'usia' =>
                        $dataPeserta['usia'],

                    'kategori' =>
                        $dataPeserta['kategori'],

                    'jenis_kelamin' =>
                        $dataPeserta['jenis_kelamin'],

                    'file_identitas' =>
                        $namaFile,

                ]);
            }


            /*
            |--------------------------------------------------------------------------
            | BUAT DATA PEMBAYARAN
            |--------------------------------------------------------------------------
            */

            $pembayaran =
                new Pembayaran();


            $pembayaran->id_pemesanan =
                $pemesanan->id_pemesanan;


            $pembayaran->status_pembayaran =
                'menunggu';


            $pembayaran->save();
        });


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