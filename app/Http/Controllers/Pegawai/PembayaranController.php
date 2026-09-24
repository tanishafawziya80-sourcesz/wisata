<?php

namespace App\Http\Controllers\Pegawai;

use App\Http\Controllers\Controller;
use App\Models\Pembayaran;

class PembayaranController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | DATA PEMBAYARAN
    |--------------------------------------------------------------------------
    */

    public function index()
    {
        $pembayaran = Pembayaran::with([
            'pemesanan.pelanggan',
            'pemesanan.jadwalTour'
        ])
        ->latest('id_pembayaran')
        ->get();

        return view(
            'pegawai.pembayaran.index',
            compact('pembayaran')
        );
    }


    /*
    |--------------------------------------------------------------------------
    | SETUJUI PEMBAYARAN
    |--------------------------------------------------------------------------
    |
    | Pegawai hanya menyetujui pembayaran.
    |
    | TIDAK membuat E-Ticket di sini.
    | E-Ticket akan diterbitkan melalui fitur E-Ticket.
    |
    */

    public function setujui($id)
    {
        $pembayaran = Pembayaran::with('pemesanan')
            ->findOrFail($id);


        /*
        |--------------------------------------------------------------------------
        | CEK STATUS
        |--------------------------------------------------------------------------
        */

        if ($pembayaran->status_pembayaran === 'disetujui') {

            return redirect()
                ->route('pegawai.pembayaran')
                ->with(
                    'success',
                    'Pembayaran sudah disetujui sebelumnya.'
                );
        }


        /*
        |--------------------------------------------------------------------------
        | UPDATE STATUS PEMBAYARAN
        |--------------------------------------------------------------------------
        */

        $pembayaran->update([
            'status_pembayaran' => 'disetujui',
        ]);


        /*
        |--------------------------------------------------------------------------
        | UPDATE STATUS PEMESANAN
        |--------------------------------------------------------------------------
        |
        | Pembayaran sudah disetujui.
        | E-Ticket belum diterbitkan.
        |
        */

        if ($pembayaran->pemesanan) {

            $pembayaran->pemesanan->update([
                'status_pemesanan' => 'disetujui',
            ]);
        }


        /*
        |--------------------------------------------------------------------------
        | SELESAI
        |--------------------------------------------------------------------------
        |
        | Tidak ada ETicket::create() di sini.
        |
        */

        return redirect()
            ->route('pegawai.pembayaran')
            ->with(
                'success',
                'Pembayaran berhasil disetujui. E-Ticket belum diterbitkan.'
            );
    }


    /*
    |--------------------------------------------------------------------------
    | TOLAK PEMBAYARAN
    |--------------------------------------------------------------------------
    */

    public function tolak($id)
    {
        $pembayaran = Pembayaran::with('pemesanan')
            ->findOrFail($id);


        /*
        |--------------------------------------------------------------------------
        | UPDATE STATUS PEMBAYARAN
        |--------------------------------------------------------------------------
        */

        $pembayaran->update([
            'status_pembayaran' => 'ditolak',
        ]);


        /*
        |--------------------------------------------------------------------------
        | UPDATE STATUS PEMESANAN
        |--------------------------------------------------------------------------
        */

        if ($pembayaran->pemesanan) {

            $pembayaran->pemesanan->update([
                'status_pemesanan' => 'ditolak',
            ]);
        }


        /*
        |--------------------------------------------------------------------------
        | KEMBALI KE DATA PEMBAYARAN
        |--------------------------------------------------------------------------
        */

        return redirect()
            ->route('pegawai.pembayaran')
            ->with(
                'success',
                'Pembayaran berhasil ditolak.'
            );
    }


    /*
    |--------------------------------------------------------------------------
    | LIHAT BUKTI PEMBAYARAN
    |--------------------------------------------------------------------------
    */

    public function bukti($id)
    {
        $pembayaran = Pembayaran::findOrFail($id);


        /*
        |--------------------------------------------------------------------------
        | CEK BUKTI
        |--------------------------------------------------------------------------
        */

        if (empty($pembayaran->bukti_pembayaran)) {

            abort(
                404,
                'Bukti pembayaran belum tersedia.'
            );
        }


        /*
        |--------------------------------------------------------------------------
        | AMBIL NAMA FILE
        |--------------------------------------------------------------------------
        */

        $filename = basename(
            $pembayaran->bukti_pembayaran
        );


        /*
        |--------------------------------------------------------------------------
        | LOKASI FILE
        |--------------------------------------------------------------------------
        */

        $path = storage_path(
            'app/public/bukti-pembayaran/' . $filename
        );


        /*
        |--------------------------------------------------------------------------
        | CEK FILE
        |--------------------------------------------------------------------------
        */

        if (!file_exists($path)) {

            abort(
                404,
                'File bukti pembayaran tidak ditemukan.'
            );
        }


        /*
        |--------------------------------------------------------------------------
        | MIME TYPE
        |--------------------------------------------------------------------------
        */

        $mime = mime_content_type($path);


        /*
        |--------------------------------------------------------------------------
        | TAMPILKAN BUKTI
        |--------------------------------------------------------------------------
        */

        return response()->file(
            $path,
            [
                'Content-Type' =>
                    $mime,

                'Content-Disposition' =>
                    'inline; filename="' .
                    $filename .
                    '"',
            ]
        );
    }
}