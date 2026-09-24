<?php

namespace App\Http\Controllers\Pegawai;

use App\Http\Controllers\Controller;
use App\Models\ETicket;
use App\Models\Pemesanan;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Str;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class ETicketController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | DATA E-TICKET
    |--------------------------------------------------------------------------
    */

    public function index()
    {
        $eTickets = ETicket::with([
            'pemesanan.pelanggan',
            'pemesanan.pembayaran',
            'pemesanan.jadwalTour'
        ])
        ->latest('id_ticket')
        ->get();

        $pemesananSiapTerbit = Pemesanan::with([
            'pelanggan',
            'pembayaran',
            'jadwalTour'
        ])
        ->where('status_pemesanan', 'disetujui')
        ->whereHas('pembayaran', function ($query) {
            $query->where(
                'status_pembayaran',
                'disetujui'
            );
        })
        ->whereDoesntHave('eTicket')
        ->latest('id_pemesanan')
        ->get();

        return view(
            'pegawai.e-ticket.index',
            compact(
                'eTickets',
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
        $pemesanan = Pemesanan::with([
            'pelanggan',
            'jadwalTour',
            'pembayaran'
        ])
        ->findOrFail($id_pemesanan);

        /*
        |--------------------------------------------------------------------------
        | PEMBAYARAN HARUS SUDAH DISETUJUI
        |--------------------------------------------------------------------------
        */

        if (
            !$pemesanan->pembayaran ||
            $pemesanan->pembayaran->status_pembayaran !== 'disetujui'
        ) {
            return redirect()
                ->route('pegawai.e-ticket.index')
                ->with(
                    'error',
                    'E-Ticket belum dapat diterbitkan karena pembayaran belum disetujui.'
                );
        }


        /*
        |--------------------------------------------------------------------------
        | PEMESANAN HARUS SUDAH DISETUJUI
        |--------------------------------------------------------------------------
        */

        if (
            $pemesanan->status_pemesanan !== 'disetujui'
        ) {
            return redirect()
                ->route('pegawai.e-ticket.index')
                ->with(
                    'error',
                    'Pemesanan belum disetujui.'
                );
        }


        /*
        |--------------------------------------------------------------------------
        | CEK TIKET
        |--------------------------------------------------------------------------
        */

        $ticket = ETicket::where(
            'id_pemesanan',
            $pemesanan->id_pemesanan
        )->first();

        if ($ticket) {
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
            strtoupper(
                Str::random(6)
            );


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
                null,

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