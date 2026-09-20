<?php

namespace App\Http\Controllers;

use App\Models\ETicket;

class PegawaiETicketController extends Controller
{
    public function index()
    {
        $eTicket = ETicket::all();

        return view('pegawai.e-ticket.index', compact('eTicket'));
    }

    public function download($id)
    {
        $ticket = ETicket::findOrFail($id);

        if (!$ticket->file_pdf) {
            abort(404, 'File PDF tidak tersedia.');
        }

        $path = storage_path('app/public/' . $ticket->file_pdf);

        if (!file_exists($path)) {
            abort(404, 'File PDF tidak ditemukan.');
        }

        return response()->file($path);
    }
}