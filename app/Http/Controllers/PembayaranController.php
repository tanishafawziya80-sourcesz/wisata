<?php

namespace App\Http\Controllers\Pelanggan;

use App\Http\Controllers\Controller;
use App\Models\Pemesanan;
use App\Models\Pembayaran;
use Illuminate\Http\Request;

class PembayaranController extends Controller
{
    public function index()
    {
        $pemesanan = Pemesanan::with([
            'jadwalTour',
            'pembayaran'
        ])
        ->where(
            'id_pelanggan',
            auth()->user()->id_user
        )
        ->latest('id_pemesanan')
        ->get();

        return view(
            'pelanggan.pembayaran.index',
            compact('pemesanan')
        );
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_pemesanan' => 'required|exists:pemesanan,id_pemesanan',
            'metode_pembayaran' => 'required|in:QRIS,OVO,DANA',
        ]);

        $pemesanan = Pemesanan::where(
            'id_pemesanan',
            $request->id_pemesanan
        )
        ->where(
            'id_pelanggan',
            auth()->user()->id_user
        )
        ->firstOrFail();

        Pembayaran::updateOrCreate(
            [
                'id_pemesanan' => $pemesanan->id_pemesanan
            ],
            [
                'metode_pembayaran' => $request->metode_pembayaran,
                'status_pembayaran' => 'menunggu',
            ]
        );

        return redirect()
            ->route('pelanggan.pembayaran')
            ->with(
                'success',
                'Pembayaran berhasil dibuat. Silakan lakukan pembayaran dan upload bukti pembayaran.'
            );
    }

    public function uploadBukti(Request $request)
    {
        $request->validate([
            'id_pembayaran' => 'required|exists:pembayaran,id_pembayaran',
            'bukti_pembayaran' => 'required|file|mimes:jpg,jpeg,png,pdf|max:10240',
        ]);

        $pembayaran = Pembayaran::where(
            'id_pembayaran',
            $request->id_pembayaran
        )
        ->whereHas('pemesanan', function ($query) {
            $query->where(
                'id_pelanggan',
                auth()->user()->id_user
            );
        })
        ->firstOrFail();

        $file = $request->file('bukti_pembayaran');

        $namaFile = time() . '_' . $file->getClientOriginalName();

        $file->storeAs(
            'bukti-pembayaran',
            $namaFile,
            'public'
        );

        $pembayaran->update([
            'bukti_pembayaran' => $namaFile,
            'status_pembayaran' => 'menunggu',
        ]);

        return redirect()
            ->route('pelanggan.pembayaran')
            ->with(
                'success',
                'Bukti pembayaran berhasil diupload dan menunggu verifikasi.'
            );
    }
}