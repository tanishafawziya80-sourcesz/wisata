<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JadwalTour extends Model
{
    protected $table = 'jadwal_tour';

    protected $primaryKey = 'id_jadwal';

    protected $fillable = [
        'id_paket',
        'id_tour_leader',
        'tgl_keberangkatan',
        'tgl_kepulangan',
        'kuota',
        'sisa_kuota',
    ];

    public function paketWisata()
    {
    return $this->belongsTo(PaketWisata::class, 'id_paket', 'id_paket');
    }

public function pemesanan()
    {
    return $this->hasMany(Pemesanan::class, 'id_jadwal', 'id_jadwal');
    }
}