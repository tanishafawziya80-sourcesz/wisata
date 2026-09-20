<?php

namespace App\Http\Controllers\Pegawai;

use App\Http\Controllers\Controller;
use App\Models\ETicket;
use Barryvdh\DomPDF\Facade\Pdf;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class ETicketController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | HALAMAN DATA E-TICKET
    |--------------------------------------------------------------------------
    */

    public function index()
    {
        $eTickets = ETicket::with([
            'pemesanan.pelanggan',
            'pemesanan.pembayaran'
        ])
        ->latest()
        ->get();

        return view(
            'pegawai.e-ticket.index',
            compact('eTickets')
        );
    }


    /*
    |--------------------------------------------------------------------------
    | DOWNLOAD E-TICKET PDF
    |--------------------------------------------------------------------------
    */

    public function download($id)
    {
        /*
        |--------------------------------------------------------------------------
        | AMBIL DATA TICKET
        |--------------------------------------------------------------------------
        */

        $ticket = ETicket::with([
            'pemesanan.pelanggan',
            'pemesanan.pembayaran'
        ])->findOrFail($id);


        /*
        |--------------------------------------------------------------------------
        | KODE BOOKING
        |--------------------------------------------------------------------------
        */

        $kodeBooking =
            $ticket->pemesanan->kode_booking
            ?? '-';


        /*
        |--------------------------------------------------------------------------
        | DATA QR CODE
        |--------------------------------------------------------------------------
        */

        $qrData =
            "FAWZATA TRAVEL\n" .
            "E-TICKET\n" .
            "Nomor Ticket: " .
            $ticket->nomor_ticket .
            "\n" .
            "Kode Booking: " .
            $kodeBooking;


        /*
        |--------------------------------------------------------------------------
        | GENERATE QR CODE
        |--------------------------------------------------------------------------
        |
        | Hasil QR dibuat dalam format PNG.
        | PNG kemudian diubah menjadi Base64
        | supaya dapat langsung dimasukkan ke PDF.
        |
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
        |
        | Landscape dipakai supaya tiket yang lebar
        | tidak terpotong di bagian kanan.
        |
        */

        $pdf->setPaper('a4', 'landscape');


        /*
        |--------------------------------------------------------------------------
        | NAMA FILE
        |--------------------------------------------------------------------------
        |
        | Jangan langsung menggunakan file_pdf dari database
        | karena bisa saja isinya berupa path seperti:
        |
        | storage/e-ticket/ticket-1.pdf
        |
        | Sedangkan download() hanya menerima nama file.
        |
        */

        $filename =
            'FAWZATA-TRAVEL-E-TICKET-' .
            $ticket->nomor_ticket .
            '.pdf';


        /*
        |--------------------------------------------------------------------------
        | BERSIHKAN NAMA FILE
        |--------------------------------------------------------------------------
        |
        | Menghindari karakter / atau \ yang menyebabkan
        | error Symfony HeaderUtils.
        |
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

        return $pdf->download($filename);
    }
}