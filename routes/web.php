<?php

use App\Http\Controllers\Pelanggan\PemesananController as PelangganPemesananController;
use App\Http\Controllers\Pegawai\ETicketController;
use App\Http\Controllers\Pegawai\DokumenController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PaketWisataController;
use App\Http\Controllers\Admin\PaketWisataController as AdminPaketWisataController;
use App\Http\Controllers\Pegawai\PembayaranController;
use App\Http\Controllers\Pelanggan\PembayaranController as PelangganPembayaranController;
use App\Http\Controllers\Pelanggan\ETicketController as PelangganETicketController;
Route::get('/pelanggan/e-ticket/{id}/download', [
    ETicketController::class,
    'download'
])
->middleware(['auth', 'role:pelanggan'])
->name('pelanggan.e-ticket.download');
use App\Http\Controllers\Admin\PenggunaController;
use App\Http\Controllers\Admin\JadwalTourController;
use App\Http\Controllers\Admin\SystemController;
use App\Http\Controllers\Pegawai\PemesananController;



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

Route::post('/register', [AuthController::class, 'register']);

Route::post('/login', [AuthController::class, 'login']);

Route::post('/logout', [AuthController::class, 'logout'])
    ->middleware('auth');


/*
|--------------------------------------------------------------------------
| DASHBOARD ADMIN
|--------------------------------------------------------------------------
*/

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'role:admin']);


/*
|--------------------------------------------------------------------------
| DASHBOARD PEGAWAI
|--------------------------------------------------------------------------
*/

Route::get('/pegawai/dashboard', function () {
    return view('pegawai.dashboard');
})->middleware(['auth', 'role:pegawai']);


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
| FITUR PELANGGAN
|--------------------------------------------------------------------------
*/

Route::middleware(['auth', 'role:pelanggan'])->group(function () {

    /*
    |--------------------------------------------------------------------------
    | PAKET WISATA
    |--------------------------------------------------------------------------
    */

    Route::get('/paket-wisata', [
        PaketWisataController::class,
        'index'
    ])
    ->name('paket-wisata.index');


    /*
    |--------------------------------------------------------------------------
    | PEMESANAN
    |--------------------------------------------------------------------------
    */

    Route::get('/pelanggan/pemesanan/{id_paket}', [
    PelangganPemesananController::class,
    'create'
])
->name('pelanggan.pemesanan.create');

Route::post('/pelanggan/pemesanan', [
    PelangganPemesananController::class,
    'store'
])
->name('pelanggan.pemesanan.store');

    Route::post('/pelanggan/pemesanan', [
        PelangganPemesananController::class,
        'store'
    ])
    ->name('pelanggan.pemesanan.store');


    /*
    |--------------------------------------------------------------------------
    | DAFTAR PEMESANAN
    |--------------------------------------------------------------------------
    */

    Route::get('/pelanggan/pemesanan', [
        PelangganPemesananController::class,
        'index'
    ])
    ->name('pelanggan.pemesanan.index');


    /*
    |--------------------------------------------------------------------------
    | PEMBAYARAN
    |--------------------------------------------------------------------------
    */

    Route::get('/pelanggan/pembayaran', [
        PelangganPembayaranController::class,
        'index'
    ])
    ->name('pelanggan.pembayaran');


    Route::post('/pelanggan/pembayaran', [
        PelangganPembayaranController::class,
        'store'
    ])
    ->name('pelanggan.pembayaran.store');


    Route::post('/pelanggan/pembayaran/upload', [
        PelangganPembayaranController::class,
        'uploadBukti'
    ])
    ->name('pelanggan.pembayaran.upload');


    /*
    |--------------------------------------------------------------------------
    | E-TICKET
    |--------------------------------------------------------------------------
    */

    Route::get('/pelanggan/e-ticket', [
        PelangganETicketController::class,
        'index'
    ])
    ->name('pelanggan.e-ticket');

});
/*
|--------------------------------------------------------------------------
| PAKET WISATA - KHUSUS ADMIN
|--------------------------------------------------------------------------
*/

Route::get('/admin/paket-wisata/create', [
    AdminPaketWisataController::class,
    'create'
])->middleware(['auth', 'role:admin']);


Route::post('/admin/paket-wisata', [
    AdminPaketWisataController::class,
    'store'
])->middleware(['auth', 'role:admin']);


Route::get('/admin/paket-wisata', [
    AdminPaketWisataController::class,
    'index'
])->middleware(['auth', 'role:admin'])
  ->name('admin.paket-wisata.index');


  Route::get('/admin/paket-wisata/{id}/edit', [
    AdminPaketWisataController::class,
    'edit'
])->middleware(['auth', 'role:admin']);


Route::put('/admin/paket-wisata/{id}', [
    AdminPaketWisataController::class,
    'update'
])->middleware(['auth', 'role:admin']);


Route::delete('/admin/paket-wisata/{id}', [
    AdminPaketWisataController::class,
    'destroy'
])->middleware(['auth', 'role:admin']);

Route::get('/admin/pengguna', [PenggunaController::class, 'index'])
    ->middleware(['auth', 'role:admin'])
    ->name('admin.pengguna.index');

    Route::middleware(['auth', 'role:admin'])->group(function () {

    Route::get('/admin/jadwal-tour', [JadwalTourController::class, 'index'])
        ->name('admin.jadwal-tour.index');

    Route::get('/admin/jadwal-tour/create', [JadwalTourController::class, 'create'])
        ->name('admin.jadwal-tour.create');

    Route::post('/admin/jadwal-tour', [JadwalTourController::class, 'store'])
        ->name('admin.jadwal-tour.store');

    Route::get('/admin/jadwal-tour/{jadwal}/edit', [JadwalTourController::class, 'edit'])
        ->name('admin.jadwal-tour.edit');

    Route::put('/admin/jadwal-tour/{jadwal}', [JadwalTourController::class, 'update'])
        ->name('admin.jadwal-tour.update');

    Route::delete('/admin/jadwal-tour/{jadwal}', [JadwalTourController::class, 'destroy'])
        ->name('admin.jadwal-tour.destroy');

        Route::get('/admin/sistem', [SystemController::class, 'index'])
    ->middleware(['auth', 'role:admin'])
    ->name('admin.sistem');

});

/*
|--------------------------------------------------------------------------
| PAKET WISATA - KHUSUS PEGAWAI
|--------------------------------------------------------------------------
*/

Route::get('/pegawai/pembayaran', [
    PembayaranController::class,
    'index'
])
->middleware(['auth', 'role:pegawai'])
->name('pegawai.pembayaran');


Route::post('/pegawai/pembayaran/{id}/setujui', [
    PembayaranController::class,
    'setujui'
])
->middleware(['auth', 'role:pegawai'])
->name('pegawai.pembayaran.setujui');


Route::post('/pegawai/pembayaran/{id}/tolak', [
    PembayaranController::class,
    'tolak'
])
->middleware(['auth', 'role:pegawai'])
->name('pegawai.pembayaran.tolak');


Route::get('/pegawai/pembayaran/{id}/bukti', [
    PembayaranController::class,
    'bukti'
])
->middleware(['auth', 'role:pegawai'])
->name('pegawai.pembayaran.bukti');

Route::middleware(['auth', 'role:pegawai'])->group(function () {

    Route::get('/pegawai/pemesanan', [PemesananController::class, 'index'])
        ->name('pegawai.pemesanan');

    Route::get('/pegawai/dokumen', [DokumenController::class, 'index'])
    ->middleware('auth')
    ->name('pegawai.dokumen.index');

    Route::get('/pegawai/e-ticket', [
    ETicketController::class,
    'index'
])
->middleware(['auth', 'role:pegawai']);

Route::get('/pegawai/e-ticket/download/{id}', [
    ETicketController::class,
    'download'
])
->middleware(['auth', 'role:pegawai']);

Route::get('/pegawai/e-ticket/download/{id}', [
    ETicketController::class,
    'download'
])
->middleware(['auth', 'role:pegawai']);

Route::get('/pegawai/e-ticket', [
    \App\Http\Controllers\Pegawai\ETicketController::class,
    'index'
])
->middleware(['auth', 'role:pegawai'])
->name('pegawai.e-ticket.index');


Route::get('/pegawai/e-ticket/download/{id}', [
    \App\Http\Controllers\Pegawai\ETicketController::class,
    'download'
])
->middleware(['auth', 'role:pegawai'])
->name('pegawai.e-ticket.download');




});