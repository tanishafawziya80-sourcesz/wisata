<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PaketWisata extends Model
{
    protected $table = 'paket_wisata';

    protected $primaryKey = 'id_paket';

    protected $fillable = [
        'nama_paket',
        'foto_paket',
        'deskripsi',
        'akomodasi',
        'armada_transport',
        'harga_normal',
        'harga_promo',
        'status',
    ];

    public function jadwalTour()
    {
        return $this->hasMany(
            JadwalTour::class,
            'id_paket',
            'id_paket'
        );
    }
}