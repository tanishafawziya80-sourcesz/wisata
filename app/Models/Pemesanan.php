<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Pemesanan extends Model
{
    /*
    |--------------------------------------------------------------------------
    | TABLE
    |--------------------------------------------------------------------------
    */

    protected $table = 'pemesanan';


    /*
    |--------------------------------------------------------------------------
    | PRIMARY KEY
    |--------------------------------------------------------------------------
    */

    protected $primaryKey =
        'id_pemesanan';


    /*
    |--------------------------------------------------------------------------
    | TIMESTAMPS
    |--------------------------------------------------------------------------
    */

    public $timestamps = true;


    /*
    |--------------------------------------------------------------------------
    | MASS ASSIGNMENT
    |--------------------------------------------------------------------------
    */

    protected $fillable = [

        'id_pelanggan',

        'id_paket_wisata',

        'kode_booking',

        'jumlah_peserta',

        'total_harga',

        'status_pemesanan',

    ];


    /*
    |--------------------------------------------------------------------------
    | CAST
    |--------------------------------------------------------------------------
    */

    protected $casts = [

        'jumlah_peserta' => 'integer',

        'total_harga' => 'decimal:2',

    ];


    /*
    |--------------------------------------------------------------------------
    | PEMESANAN -> PELANGGAN
    |--------------------------------------------------------------------------
    */

    public function pelanggan(): BelongsTo
    {
        return $this->belongsTo(

            User::class,

            'id_pelanggan',

            'id_user'

        );
    }


    /*
    |--------------------------------------------------------------------------
    | PEMESANAN -> PAKET WISATA
    |--------------------------------------------------------------------------
    */

    public function paketWisata(): BelongsTo
    {
        return $this->belongsTo(

            PaketWisata::class,

            'id_paket_wisata',

            'id_paket_wisata'

        );
    }


    /*
    |--------------------------------------------------------------------------
    | PEMESANAN -> PEMBAYARAN
    |--------------------------------------------------------------------------
    */

    public function pembayaran(): HasOne
    {
        return $this->hasOne(

            Pembayaran::class,

            'id_pemesanan',

            'id_pemesanan'

        );
    }
}