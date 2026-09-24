<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| CONTROLLERS
|--------------------------------------------------------------------------
*/

// AUTH
use App\Http\Controllers\AuthController;

// PAKET WISATA
use App\Http\Controllers\PaketWisataController;
use App\Http\Controllers\Admin\PaketWisataController as AdminPaketWisataController;

// ADMIN
use App\Http\Controllers\Admin\PenggunaController;
use App\Http\Controllers\Admin\JadwalTourController;
use App\Http\Controllers\Admin\SystemController;
use App\Http\Controllers\Admin\PenghasilanController;

// PEGAWAI
use App\Http\Controllers\Pegawai\ETicketController;
use App\Http\Controllers\Pegawai\DokumenController;
use App\Http\Controllers\Pegawai\PembayaranController;
use App\Http\Controllers\Pegawai\PemesananController;

// PELANGGAN
use App\Http\Controllers\Pelanggan\PemesananController as PelangganPemesananController;
use App\Http\Controllers\Pelanggan\PembayaranController as PelangganPembayaranController;
use App\Http\Controllers\Pelanggan\ETicketController as PelangganETicketController;


/*
|--------------------------------------------------------------------------
| HALAMAN UTAMA
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('welcome');
});


/*
|--------------------------------------------------------------------------
| AUTH
|--------------------------------------------------------------------------
*/

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::post('/register', [
    AuthController::class,
    'register'
]);

Route::post('/login', [
    AuthController::class,
    'login'
]);

Route::post('/logout', [
    AuthController::class,
    'logout'
])->middleware('auth');


/*
|--------------------------------------------------------------------------
| DASHBOARD ADMIN
|--------------------------------------------------------------------------
*/

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})
->middleware(['auth', 'role:admin'])
->name('admin.dashboard');


/*
|--------------------------------------------------------------------------
| DASHBOARD PEGAWAI
|--------------------------------------------------------------------------
*/

Route::get('/pegawai/dashboard', function () {
    return view('pegawai.dashboard');
})
->middleware(['auth', 'role:pegawai'])
->name('pegawai.dashboard');


/*
|--------------------------------------------------------------------------
| DASHBOARD PELANGGAN
|--------------------------------------------------------------------------
*/

Route::get('/pelanggan/dashboard', function () {
    return view('pelanggan.dashboard');
})
->middleware(['auth', 'role:pelanggan'])
->name('pelanggan.dashboard');


/*
|--------------------------------------------------------------------------
| PAKET WISATA - SEMUA USER LOGIN
|--------------------------------------------------------------------------
|
| Admin    : bisa melihat
| Pegawai  : bisa melihat
| Pelanggan: bisa melihat
|
*/

Route::middleware('auth')->group(function () {

    Route::get('/paket-wisata', [
        PaketWisataController::class,
        'index'
    ])->name('paket-wisata.index');

});


/*
|--------------------------------------------------------------------------
| FITUR PELANGGAN
|--------------------------------------------------------------------------
*/

Route::middleware(['auth', 'role:pelanggan'])->group(function () {

    /*
    |--------------------------------------------------------------------------
    | PEMESANAN PELANGGAN
    |--------------------------------------------------------------------------
    |
    | id_paket  = ID paket wisata
    | id_jadwal = ID jadwal yang dipilih pelanggan
    |
    */

    Route::get(
        '/pelanggan/pemesanan/{id_paket}/{id_jadwal}',
        [
            PelangganPemesananController::class,
            'create'
        ]
    )->name('pelanggan.pemesanan.create');


    Route::post('/pelanggan/pemesanan', [
        PelangganPemesananController::class,
        'store'
    ])->name('pelanggan.pemesanan.store');


    Route::get('/pelanggan/pemesanan', [
        PelangganPemesananController::class,
        'index'
    ])->name('pelanggan.pemesanan.index');


    /*
    |--------------------------------------------------------------------------
    | PEMBAYARAN PELANGGAN
    |--------------------------------------------------------------------------
    */

    Route::get('/pelanggan/pembayaran', [
        PelangganPembayaranController::class,
        'index'
    ])->name('pelanggan.pembayaran');

    Route::post('/pelanggan/pembayaran', [
        PelangganPembayaranController::class,
        'store'
    ])->name('pelanggan.pembayaran.store');


    /*
    |--------------------------------------------------------------------------
    | UPLOAD BUKTI PEMBAYARAN
    |--------------------------------------------------------------------------
    */

    Route::post('/pelanggan/pembayaran/upload', [
        PelangganPembayaranController::class,
        'upload'
    ])->name('pelanggan.pembayaran.upload');


    /*
    |--------------------------------------------------------------------------
    | E-TICKET PELANGGAN
    |--------------------------------------------------------------------------
    */

    Route::get('/pelanggan/e-ticket', [
        PelangganETicketController::class,
        'index'
    ])->name('pelanggan.e-ticket');


    Route::get('/pelanggan/e-ticket/{id}/download', [
        PelangganETicketController::class,
        'download'
    ])->name('pelanggan.e-ticket.download');

});


/*
|--------------------------------------------------------------------------
| ADMIN
|--------------------------------------------------------------------------
*/

Route::middleware(['auth', 'role:admin'])->group(function () {

    /*
    |--------------------------------------------------------------------------
    | ADMIN - PAKET WISATA
    |--------------------------------------------------------------------------
    */

    Route::get('/admin/paket-wisata', [
        AdminPaketWisataController::class,
        'index'
    ])->name('admin.paket-wisata.index');


    Route::get('/admin/paket-wisata/create', [
        AdminPaketWisataController::class,
        'create'
    ])->name('admin.paket-wisata.create');


    Route::post('/admin/paket-wisata', [
        AdminPaketWisataController::class,
        'store'
    ])->name('admin.paket-wisata.store');


    Route::get('/admin/paket-wisata/{id}/edit', [
        AdminPaketWisataController::class,
        'edit'
    ])->name('admin.paket-wisata.edit');


    Route::put('/admin/paket-wisata/{id}', [
        AdminPaketWisataController::class,
        'update'
    ])->name('admin.paket-wisata.update');


    Route::delete('/admin/paket-wisata/{id}', [
        AdminPaketWisataController::class,
        'destroy'
    ])->name('admin.paket-wisata.destroy');


    /*
    |--------------------------------------------------------------------------
    | ADMIN - PENGGUNA
    |--------------------------------------------------------------------------
    */

    Route::get('/admin/pengguna', [
        PenggunaController::class,
        'index'
    ])->name('admin.pengguna.index');


    /*
    |--------------------------------------------------------------------------
    | ADMIN - JADWAL TOUR
    |--------------------------------------------------------------------------
    */

    Route::get('/admin/jadwal-tour', [
        JadwalTourController::class,
        'index'
    ])->name('admin.jadwal-tour.index');


    Route::get('/admin/jadwal-tour/create', [
        JadwalTourController::class,
        'create'
    ])->name('admin.jadwal-tour.create');


    Route::post('/admin/jadwal-tour', [
        JadwalTourController::class,
        'store'
    ])->name('admin.jadwal-tour.store');


    Route::get('/admin/jadwal-tour/{jadwal}/edit', [
        JadwalTourController::class,
        'edit'
    ])->name('admin.jadwal-tour.edit');


    Route::put('/admin/jadwal-tour/{jadwal}', [
        JadwalTourController::class,
        'update'
    ])->name('admin.jadwal-tour.update');


    Route::delete('/admin/jadwal-tour/{jadwal}', [
        JadwalTourController::class,
        'destroy'
    ])->name('admin.jadwal-tour.destroy');


    /*
    |--------------------------------------------------------------------------
    | ADMIN - SISTEM
    |--------------------------------------------------------------------------
    */

    Route::get('/admin/sistem', [
        SystemController::class,
        'index'
    ])->name('admin.sistem');

});


/*
|--------------------------------------------------------------------------
| PENGHASILAN
|--------------------------------------------------------------------------
|
| Bisa diakses oleh:
| - Admin
| - Pegawai
|
*/

Route::middleware(['auth', 'role:admin,pegawai'])->group(function () {

    Route::get('/admin/penghasilan', [
        PenghasilanController::class,
        'index'
    ])->name('admin.penghasilan');

});


/*
|--------------------------------------------------------------------------
| FITUR PEGAWAI
|--------------------------------------------------------------------------
*/

Route::middleware(['auth', 'role:pegawai'])->group(function () {

    /*
    |--------------------------------------------------------------------------
    | PAKET WISATA
    |--------------------------------------------------------------------------
    |
    | Pegawai hanya melihat paket wisata.
    | Tidak bisa tambah/edit/hapus.
    |
    */

    Route::get('/pegawai/paket-wisata', [
        PaketWisataController::class,
        'index'
    ])->name('pegawai.paket-wisata.index');


    /*
    |--------------------------------------------------------------------------
    | PEMESANAN
    |--------------------------------------------------------------------------
    */

    Route::get('/pegawai/pemesanan', [
        PemesananController::class,
        'index'
    ])->name('pegawai.pemesanan');


    Route::get('/pegawai/pemesanan/{id}', [
        PemesananController::class,
        'detail'
    ])->name('pegawai.pemesanan.detail');


    /*
    |--------------------------------------------------------------------------
    | DOKUMEN
    |--------------------------------------------------------------------------
    */

    Route::get('/pegawai/dokumen', [
        DokumenController::class,
        'index'
    ])->name('pegawai.dokumen.index');


    /*
    |--------------------------------------------------------------------------
    | E-TICKET
    |--------------------------------------------------------------------------
    */

    Route::get('/pegawai/e-ticket', [
        ETicketController::class,
        'index'
    ])->name('pegawai.e-ticket.index');


    Route::post('/pegawai/e-ticket/{id_pemesanan}/terbitkan', [
        ETicketController::class,
        'terbitkan'
    ])->name('pegawai.e-ticket.terbitkan');


    Route::get('/pegawai/e-ticket/download/{id}', [
        ETicketController::class,
        'download'
    ])->name('pegawai.e-ticket.download');


    /*
    |--------------------------------------------------------------------------
    | PEMBAYARAN PEGAWAI
    |--------------------------------------------------------------------------
    */

    Route::get('/pegawai/pembayaran', [
        PembayaranController::class,
        'index'
    ])->name('pegawai.pembayaran');


    Route::get('/pegawai/pembayaran/{id}/bukti', [
        PembayaranController::class,
        'bukti'
    ])->name('pegawai.pembayaran.bukti');


    Route::post('/pegawai/pembayaran/{id}/setujui', [
        PembayaranController::class,
        'setujui'
    ])->name('pegawai.pembayaran.setujui');


    Route::post('/pegawai/pembayaran/{id}/tolak', [
        PembayaranController::class,
        'tolak'
    ])->name('pegawai.pembayaran.tolak');


    /*
    |--------------------------------------------------------------------------
    | CEK ROLE
    |--------------------------------------------------------------------------
    */

    Route::get('/cek-role', function () {

        return [
            'nama' => auth()->user()->nama_lengkap,
            'role' => auth()->user()->role,
        ];

    });

});