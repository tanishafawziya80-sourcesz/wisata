<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DokumenPemesanan extends Model
{
    protected $table = 'dokumen_pemesanan';

    protected $primaryKey = 'id_dokumen';

    protected $fillable = [
        'id_pemesanan',
        'nama_dokumen',
        'file_dokumen',
        'status',
    ];

    public function pemesanan()
    {
        return $this->belongsTo(
            Pemesanan::class,
            'id_pemesanan',
            'id_pemesanan'
        );
    }
}