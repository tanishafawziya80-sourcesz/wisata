<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ETicket extends Model
{
    protected $table = 'e_ticket';

    protected $primaryKey = 'id_ticket';

    protected $fillable = [
        'id_pemesanan',
        'nomor_ticket',
        'file_pdf',
        'tgl_terbit',
    ];

    protected $casts = [
        'tgl_terbit' => 'date',
    ];


    /*
    |--------------------------------------------------------------------------
    | RELASI PEMESANAN
    |--------------------------------------------------------------------------
    */

    public function pemesanan()
    {
        return $this->belongsTo(
            Pemesanan::class,
            'id_pemesanan',
            'id_pemesanan'
        );
    }
}