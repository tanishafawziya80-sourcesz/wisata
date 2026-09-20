<?php

namespace App\Http\Controllers\Pegawai;

use App\Http\Controllers\Controller;
use App\Models\Pembayaran;
use App\Models\ETicket;
use Illuminate\Support\Str;

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
    */

    public function setujui($id)
    {
        $pembayaran = Pembayaran::with('pemesanan')
            ->findOrFail($id);

        /*
        | Jika sudah disetujui,
        | jangan proses ulang.
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
        | Update status pembayaran
        */

        $pembayaran->update([
            'status_pembayaran' => 'disetujui',
        ]);


        /*
        | Update status pemesanan
        */

        if ($pembayaran->pemesanan) {

            $pembayaran->pemesanan->update([
                'status_pemesanan' => 'disetujui',
            ]);
        }


        /*
        | Cek apakah E-Ticket sudah ada
        */

        $ticket = ETicket::where(
            'id_pemesanan',
            $pembayaran->id_pemesanan
        )->first();


        /*
        | Jika belum ada, buat E-Ticket
        */

        if (!$ticket) {

            ETicket::create([

                'id_pemesanan' =>
                    $pembayaran->id_pemesanan,

                'nomor_ticket' =>
                    'TICKET-' .
                    strtoupper(
                        Str::random(8)
                    ),

                'file_pdf' =>
                    'ticket-' .
                    $pembayaran->id_pemesanan .
                    '.pdf',

                'tgl_terbit' => now(),

            ]);
        }


        return redirect()
            ->route('pegawai.pembayaran')
            ->with(
                'success',
                'Pembayaran dan pemesanan berhasil disetujui. E-Ticket telah tersedia.'
            );
    }


    /*
    |--------------------------------------------------------------------------
    | TOLAK PEMBAYARAN
    |--------------------------------------------------------------------------
    */

    public function tolak($id)
    {
        $pembayaran = Pembayaran::findOrFail($id);

        $pembayaran->update([
            'status_pembayaran' => 'ditolak',
        ]);


        /*
        | Jika pembayaran ditolak,
        | status pemesanan juga ditolak.
        */

        if ($pembayaran->pemesanan) {

            $pembayaran->pemesanan->update([
                'status_pemesanan' => 'ditolak',
            ]);
        }


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
        | Pastikan bukti tersedia
        */

        if (
            empty(
                $pembayaran->bukti_pembayaran
            )
        ) {

            abort(
                404,
                'Bukti pembayaran belum tersedia.'
            );
        }


        /*
        | Ambil nama file
        */

        $filename = basename(
            $pembayaran->bukti_pembayaran
        );


        /*
        | Lokasi file
        */

        $path = storage_path(
            'app/public/bukti-pembayaran/' .
            $filename
        );


        /*
        | Pastikan file benar-benar ada
        */

        if (!file_exists($path)) {

            abort(
                404,
                'File bukti pembayaran tidak ditemukan.'
            );
        }


        /*
        | Tentukan MIME TYPE
        */

        $mime = mime_content_type($path);


        /*
        | Tampilkan file
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