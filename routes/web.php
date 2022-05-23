<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormpengirimanController;
use App\Http\Controllers\SampahController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistrasiController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/test', function () {
    return view('test');
});

Route::get('/', function () {
    return view('home.halaman-beranda');
});


//========================================================================================================
//                                              FORM PENGIRIMAN
//========================================================================================================

Route::get('/pengiriman/create', [FormpengirimanController::class,'create'])
    ->name('pengiriman.create')
    ->middleware('auth');

Route::post('/pengiriman/store', [FormpengirimanController::class,'store'])
    ->name('pengiriman.store')
    ->middleware('auth');

Route::get('/tabel-pengiriman', [FormpengirimanController::class, 'datapenjualan'])
    ->name('pengiriman.datapenjualan')
    ->middleware('auth');

Route::get('/tabel-pengiriman/{pengiriman}/edit', [FormpengirimanController::class, 'edit'])
    ->name('pengiriman.edit')
    ->middleware('auth');

Route::patch('/pengiriman-edit/{pengiriman}', [FormpengirimanController::class, 'update'])
    ->name('pengiriman.update')
    ->middleware('auth');

Route::get('/pengiriman-show/{pengiriman}', [FormpengirimanController::class, 'tampil'])
    ->name('pengiriman.tampil')
    ->middleware('auth');

Route::delete('/pengiriman-delete/{pengiriman}', [FormpengirimanController::class, 'destroy'])
    ->name('pengiriman.destroy')
    ->middleware('auth');

//========================================================================================================
//                                                   FORM SAMPAH
//========================================================================================================

Route::get('/sampah/create', [SampahController::class,'create'])
    ->name('sampah.create')
    ->middleware('auth');

Route::post('/sampah/store', [SampahController::class,'store'])
    ->name('sampah.store')
    ->middleware('auth');

Route::get('/tabel-sampah', [SampahController::class, 'index'])
    ->name('sampah.tabelsampah')
    ->middleware('auth');

Route::get('sampah-show/{sampah}', [SampahController::class, 'show'])
    ->name('sampah.show')
    ->middleware('auth');

Route::get('/sampah/{sampah}/edit', [SampahController::class, 'edit'])
    ->name('sampah.edit')
    ->middleware('auth');

Route::patch('/sampah-edit/{sampah}', [SampahController::class, 'update'])
    ->name('sampah.update')
    ->middleware('auth');

Route::delete('/sampah-delete/{sampah}', [SampahController::class, 'destroy'])
    ->name('sampah.destroy')
    ->middleware('auth');

//========================================================================================================
//                                                      LOGIN
//========================================================================================================

Route::get('/login', [LoginController::class, 'index'])
    ->name('login')
    ->middleware('guest'); //middleware guest

Route::post('/login', [LoginController::class, 'authenticate']);
Route::get('/logout', [LoginController::class, 'logout']);

//========================================================================================================
//                                                REGISTRASI
//========================================================================================================

Route::get('/registrasi', [RegistrasiController::class, 'index'])
    ->name('registrasi')
    ->middleware('guest'); //middleware guest

Route::post('/registrasi', [RegistrasiController::class, 'store']);

//========================================================================================================
//                                                FOTO PROFIL
//========================================================================================================
Route::get('/file-upload', [ProfilController::class, 'index'])
    ->name('file-upload')
    ->middleware('auth');

Route::post('/file-upload', [ProfilController::class, 'prosesFileUpload'])
    ->middleware('auth');

//========================================================================================================
//                                                  ADMIN
//========================================================================================================

Route::get('/admin', [AdminController::class, 'index'])
    ->name('admin.index')
    ->middleware('admin');

Route::get('/tabel-user', [AdminController::class, 'user'])
    ->name('admin.user')
    ->middleware('admin');

Route::get('tabel-pesanan', [AdminController::class, 'pesanan'])
    ->name('admin.pesanan')
    ->middleware('admin');

Route::get('/admin-konfirmasi', [AdminController::class, 'konfirmasi'])
    ->name('admin.konfirmasi')
    ->middleware('admin');

Route::get('/admin-konfirmasi/{sampah}', [AdminController::class, 'show_konfirmasi'])
    ->name('admin.konfirmasiShow')
    ->middleware('admin');

Route::patch('/admin-konfirmasi/{sampah}', [AdminController::class, 'konfirmasi_sampah'])
    ->name('admin.konfirmasiUser')
    ->middleware('admin');

Route::delete('/admin-pesanan-destroy/{sampah}', [AdminController::class, 'destroy'])
    ->name('admin.destroy')
    ->middleware('admin');
