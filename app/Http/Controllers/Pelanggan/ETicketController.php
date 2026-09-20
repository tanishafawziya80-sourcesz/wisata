<?php

namespace App\Http\Controllers\Pelanggan;

use App\Http\Controllers\Controller;
use App\Models\ETicket;
use Barryvdh\DomPDF\Facade\Pdf;

class ETicketController extends Controller
{
    public function index()
    {
        $eTicket = ETicket::with('pemesanan')
            ->whereHas('pemesanan', function ($query) {
                $query->where(
                    'id_pelanggan',
                    auth()->user()->id_user
                );
            })
            ->latest()
            ->get();

        return view('pelanggan.e-ticket.index', compact('eTicket'));
    }

    public function download($id)
    {
        $ticket = ETicket::with('pemesanan')
            ->whereHas('pemesanan', function ($query) {
                $query->where(
                    'id_pelanggan',
                    auth()->user()->id_user
                );
            })
            ->findOrFail($id);

        $pdf = Pdf::loadView(
            'pelanggan.e-ticket.pdf',
            compact('ticket')
        );

        return $pdf->download(
            $ticket->nomor_ticket . '.pdf'
        );
    }
}