<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PesertaPemesanan extends Model
{
    protected $table = 'peserta_pemesanan';

    protected $primaryKey = 'id_peserta';

    protected $fillable = [
        'id_pemesanan',
        'nama_peserta',
        'nik',
        'usia',
        'kategori',
        'jenis_kelamin',
        'file_identitas',
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