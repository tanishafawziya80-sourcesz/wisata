<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pemesanan extends Model
{
    protected $table = 'pemesanan';

    protected $primaryKey = 'id_pemesanan';

    protected $fillable = [
        'kode_booking',
        'id_pelanggan',
        'id_jadwal',
        'tgl_pemesanan',
        'jumlah_peserta',
        'data_peserta',
        'total_bayar',
        'status_pemesanan',
        'catatan_revisi',
    ];

    protected $casts = [
        'tgl_pemesanan' => 'datetime',
        'total_bayar' => 'decimal:2',
        'data_peserta' => 'array',
    ];


    /*
    |--------------------------------------------------------------------------
    | RELASI PELANGGAN
    |--------------------------------------------------------------------------
    */

    public function pelanggan()
    {
        return $this->belongsTo(
            User::class,
            'id_pelanggan',
            'id_user'
        );
    }


    /*
    |--------------------------------------------------------------------------
    | RELASI JADWAL TOUR
    |--------------------------------------------------------------------------
    */

    public function jadwalTour()
    {
        return $this->belongsTo(
            JadwalTour::class,
            'id_jadwal',
            'id_jadwal'
        );
    }


    /*
    |--------------------------------------------------------------------------
    | RELASI PESERTA PEMESANAN
    |--------------------------------------------------------------------------
    */

    public function peserta()
    {
        return $this->hasMany(
            PesertaPemesanan::class,
            'id_pemesanan',
            'id_pemesanan'
        );
    }


    /*
    |--------------------------------------------------------------------------
    | RELASI PESERTA PEMESANAN - NAMA LAMA
    |--------------------------------------------------------------------------
    */

    public function pesertaPemesanan()
    {
        return $this->hasMany(
            PesertaPemesanan::class,
            'id_pemesanan',
            'id_pemesanan'
        );
    }


    /*
    |--------------------------------------------------------------------------
    | RELASI DOKUMEN PEMESANAN
    |--------------------------------------------------------------------------
    */

    public function dokumenPemesanan()
    {
        return $this->hasMany(
            DokumenPemesanan::class,
            'id_pemesanan',
            'id_pemesanan'
        );
    }


    /*
    |--------------------------------------------------------------------------
    | RELASI E-TICKET
    |--------------------------------------------------------------------------
    */

    public function eTicket()
    {
        return $this->hasOne(
            ETicket::class,
            'id_pemesanan',
            'id_pemesanan'
        );
    }


    /*
    |--------------------------------------------------------------------------
    | RELASI PEMBAYARAN
    |--------------------------------------------------------------------------
    */

    public function pembayaran()
    {
        return $this->hasOne(
            Pembayaran::class,
            'id_pemesanan',
            'id_pemesanan'
        );
    }
}