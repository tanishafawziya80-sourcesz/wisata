<?php

namespace App\Http\Controllers\Pelanggan;

use App\Http\Controllers\Controller;
use App\Models\Pemesanan;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Auth;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class ETicketController extends Controller
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
            'eTicket',
        ])
            ->where(
                'id_pelanggan',
                Auth::user()->id_user
            )
            ->latest('created_at')
            ->get();

        return view(
            'pelanggan.e-ticket.index',
            compact('pemesanan')
        );
    }


    /*
    |--------------------------------------------------------------------------
    | DOWNLOAD E-TICKET
    |--------------------------------------------------------------------------
    */

    public function download($id)
    {
        /*
        |--------------------------------------------------------------------------
        | CARI PEMESANAN MILIK PELANGGAN
        |--------------------------------------------------------------------------
        */

        $pemesanan = Pemesanan::with([
            'pelanggan',
            'jadwalTour',
            'pembayaran',
            'eTicket',
        ])
            ->where(
                'id_pelanggan',
                Auth::user()->id_user
            )
            ->findOrFail($id);


        /*
        |--------------------------------------------------------------------------
        | CEK E-TICKET
        |--------------------------------------------------------------------------
        */

        if (!$pemesanan->eTicket) {

            return back()->with(
                'error',
                'E-ticket belum diterbitkan oleh pegawai.'
            );
        }


        /*
        |--------------------------------------------------------------------------
        | DATA E-TICKET
        |--------------------------------------------------------------------------
        */

        $ticket = $pemesanan->eTicket;


        /*
        |--------------------------------------------------------------------------
        | DATA PELANGGAN
        |--------------------------------------------------------------------------
        */

        $namaPelanggan =
            $pemesanan->pelanggan->nama_lengkap
            ?? '-';


        /*
        |--------------------------------------------------------------------------
        | KODE BOOKING
        |--------------------------------------------------------------------------
        */

        $kodeBooking =
            $pemesanan->kode_booking
            ?? '-';


        /*
        |--------------------------------------------------------------------------
        | JUMLAH PESERTA
        |--------------------------------------------------------------------------
        */

        $jumlahPeserta =
            (int) ($pemesanan->jumlah_peserta ?? 1);


        /*
        |--------------------------------------------------------------------------
        | PASTIKAN MINIMAL 1 TIKET
        |--------------------------------------------------------------------------
        */

        if ($jumlahPeserta < 1) {

            $jumlahPeserta = 1;
        }


        /*
        |--------------------------------------------------------------------------
        | DATA SEMUA TIKET
        |--------------------------------------------------------------------------
        */

        $tickets = [];


        /*
        |--------------------------------------------------------------------------
        | BUAT TIKET SESUAI JUMLAH PESERTA
        |--------------------------------------------------------------------------
        */

        for (
            $i = 1;
            $i <= $jumlahPeserta;
            $i++
        ) {


            /*
            |--------------------------------------------------------------------------
            | NOMOR TIKET PESERTA
            |--------------------------------------------------------------------------
            |
            | Contoh:
            |
            | FZ-20260923-ABC123-01
            | FZ-20260923-ABC123-02
            | FZ-20260923-ABC123-03
            |
            */

            $nomorTiketPeserta =
                $ticket->nomor_ticket .
                '-' .
                str_pad(
                    $i,
                    2,
                    '0',
                    STR_PAD_LEFT
                );


            /*
            |--------------------------------------------------------------------------
            | DATA QR CODE
            |--------------------------------------------------------------------------
            */

            $qrData =
                "FAWZATA TRAVEL\n" .
                "E-TICKET WISATA\n" .
                "Nomor Ticket: " .
                $nomorTiketPeserta .
                "\n" .
                "Kode Booking: " .
                $kodeBooking .
                "\n" .
                "Nama: " .
                $namaPelanggan .
                "\n" .
                "Peserta: " .
                $i .
                "/" .
                $jumlahPeserta;


            /*
            |--------------------------------------------------------------------------
            | GENERATE QR
            |--------------------------------------------------------------------------
            */

            $qrCode = base64_encode(
                QrCode::format('svg')
                    ->size(250)
                    ->margin(2)
                    ->errorCorrection('H')
                    ->generate($qrData)
            );


            /*
            |--------------------------------------------------------------------------
            | SIMPAN DATA TIKET
            |--------------------------------------------------------------------------
            */

            $tickets[] = [

                'ticket' =>
                    $ticket,

                'pemesanan' =>
                    $pemesanan,

                'qrCode' =>
                    $qrCode,

                'nomorTiket' =>
                    $nomorTiketPeserta,

                'nomorPeserta' =>
                    $i,

                'jumlahPeserta' =>
                    $jumlahPeserta,

            ];
        }


        /*
        |--------------------------------------------------------------------------
        | GENERATE PDF
        |--------------------------------------------------------------------------
        */

        $pdf = Pdf::loadView(
            'pegawai.e-ticket.pdf',
            [
                'tickets' =>
                    $tickets,

                'ticket' =>
                    $ticket,

                'pemesanan' =>
                    $pemesanan,

                'qrCode' =>
                    $tickets[0]['qrCode'],
            ]
        );


        /*
        |--------------------------------------------------------------------------
        | UKURAN PDF
        |--------------------------------------------------------------------------
        */

        $pdf->setPaper(
            'a4',
            'landscape'
        );


        /*
        |--------------------------------------------------------------------------
        | NAMA FILE
        |--------------------------------------------------------------------------
        */

        $filename =
            'FAWZATA-TRAVEL-E-TICKET-' .
            $kodeBooking .
            '.pdf';


        /*
        |--------------------------------------------------------------------------
        | BERSIHKAN NAMA FILE
        |--------------------------------------------------------------------------
        */

        $filename = preg_replace(
            '/[^A-Za-z0-9._-]/',
            '-',
            $filename
        );


        /*
        |--------------------------------------------------------------------------
        | DOWNLOAD
        |--------------------------------------------------------------------------
        */

        return $pdf->download(
            $filename
        );
    }
}