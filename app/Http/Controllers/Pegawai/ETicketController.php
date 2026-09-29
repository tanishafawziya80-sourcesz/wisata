<?php

namespace App\Http\Controllers\Pegawai;

use App\Http\Controllers\Controller;
use App\Models\ETicket;
use App\Models\Pemesanan;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
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
        /*
        |--------------------------------------------------------------------------
        | E-TICKET YANG SUDAH DITERBITKAN
        |--------------------------------------------------------------------------
        */

        $eTickets = ETicket::with([
            'pemesanan.pelanggan',
            'pemesanan.pembayaran',
            'pemesanan.jadwalTour'
        ])
        ->latest()
        ->get();

        /*
        |--------------------------------------------------------------------------
        | ALIAS TICKETS
        |--------------------------------------------------------------------------
        | Disediakan juga supaya bagian lain yang masih menggunakan
        | $tickets tidak mengalami error.
        */

        $tickets = $eTickets;

        /*
        |--------------------------------------------------------------------------
        | PEMESANAN YANG SIAP DITERBITKAN E-TICKET
        |--------------------------------------------------------------------------
        */

        $pemesananSiapTerbit = Pemesanan::with([
            'pelanggan',
            'pembayaran',
            'jadwalTour'
        ])
        ->whereDoesntHave('eTicket')
        ->latest()
        ->get();

        /*
        |--------------------------------------------------------------------------
        | KIRIM SEMUA DATA KE VIEW
        |--------------------------------------------------------------------------
        */

        return view(
            'pegawai.e-ticket.index',
            compact(
                'eTickets',
                'tickets',
                'pemesananSiapTerbit'
            )
        );
    }

    /*
    |--------------------------------------------------------------------------
    | TERBITKAN E-TICKET
    |--------------------------------------------------------------------------
    */

    public function terbitkan($id_pemesanan)
    {
        /*
        |--------------------------------------------------------------------------
        | CARI PEMESANAN
        |--------------------------------------------------------------------------
        */

        $pemesanan = Pemesanan::with([
            'pelanggan',
            'pembayaran',
            'jadwalTour'
        ])->findOrFail($id_pemesanan);

        /*
        |--------------------------------------------------------------------------
        | CEK E-TICKET LAMA
        |--------------------------------------------------------------------------
        */

        $ticketLama = ETicket::where(
            'id_pemesanan',
            $pemesanan->id_pemesanan
        )->first();

        if ($ticketLama) {
            return redirect()
                ->route('pegawai.e-ticket.index')
                ->with(
                    'error',
                    'E-Ticket untuk pemesanan ini sudah diterbitkan.'
                );
        }

        /*
        |--------------------------------------------------------------------------
        | NOMOR TICKET
        |--------------------------------------------------------------------------
        */

        $nomorTicket =
            'FZ-' .
            now()->format('Ymd') .
            '-' .
            strtoupper(substr(uniqid(), -6));

        /*
        |--------------------------------------------------------------------------
        | NAMA FILE PDF
        |--------------------------------------------------------------------------
        */

        $filePdf =
            'FAWZATA-TRAVEL-E-TICKET-' .
            $nomorTicket .
            '.pdf';

        /*
        |--------------------------------------------------------------------------
        | SIMPAN E-TICKET
        |--------------------------------------------------------------------------
        */

        ETicket::create([
            'id_pemesanan' =>
                $pemesanan->id_pemesanan,

            'nomor_ticket' =>
                $nomorTicket,

            'file_pdf' =>
                $filePdf,

            'tgl_terbit' =>
                now(),
        ]);

        /*
        |--------------------------------------------------------------------------
        | UPDATE STATUS PEMESANAN
        |--------------------------------------------------------------------------
        */

        $pemesanan->update([
            'status_pemesanan' => 'selesai',
        ]);

        /*
        |--------------------------------------------------------------------------
        | KEMBALI KE HALAMAN E-TICKET
        |--------------------------------------------------------------------------
        */

        return redirect()
            ->route('pegawai.e-ticket.index')
            ->with(
                'success',
                'E-Ticket berhasil diterbitkan untuk ' .
                ($pemesanan->pelanggan->nama_lengkap ?? 'pelanggan') .
                '.'
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
        | CARI E-TICKET
        |--------------------------------------------------------------------------
        */

        $ticket = ETicket::with([
            'pemesanan.pelanggan',
            'pemesanan.pembayaran',
            'pemesanan.jadwalTour'
        ])
        ->findOrFail($id);

        /*
        |--------------------------------------------------------------------------
        | DATA DASAR
        |--------------------------------------------------------------------------
        */

        $kodeBooking =
            $ticket->pemesanan->kode_booking
            ?? '-';

        $namaPelanggan =
            $ticket->pemesanan->pelanggan->nama_lengkap
            ?? '-';

        /*
        |--------------------------------------------------------------------------
        | DATA QR
        |--------------------------------------------------------------------------
        */

        $qrData =
            "FAWZATA TRAVEL\n" .
            "E-TICKET WISATA\n" .
            "Nomor Ticket: " .
            $ticket->nomor_ticket .
            "\n" .
            "Kode Booking: " .
            $kodeBooking .
            "\n" .
            "Nama: " .
            $namaPelanggan;

        /*
        |--------------------------------------------------------------------------
        | GENERATE QR CODE
        |--------------------------------------------------------------------------
        */

        $qrCode = base64_encode(
            QrCode::format('svg')
                ->size(300)
                ->margin(2)
                ->errorCorrection('H')
                ->generate($qrData)
        );

        /*
        |--------------------------------------------------------------------------
        | GENERATE PDF
        |--------------------------------------------------------------------------
        */

        $pdf = Pdf::loadView(
            'pegawai.e-ticket.pdf',
            [
                'ticket' => $ticket,
                'qrCode' => $qrCode
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
            $ticket->nomor_ticket .
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