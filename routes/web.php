<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DataAdminController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\BarbermanController;
use App\Http\Controllers\PaketBarberController;
use App\Http\Controllers\PemesananController;
use App\Http\Controllers\DetailPemesananController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within barberman group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () { return view('welcome'); });
Route::get('/home', [HomeController::class, 'index']);
// Route::get('/dataadmin', [DataAdminController::class, 'index'])->name('dataadmin');
 
// Auth::routes();

Route::get('/dataadmin', [DataAdminController::class, 'index'])->name('dataadmin');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/dataadmin/add', [DataAdminController::class, 'add']);
Route::post('/dataadmin/insert', [DataAdminController::class, 'insert']);
Route::get('/dataadmin/detail/{id}', [DataAdminController::class, 'detail']);
Route::get('/dataadmin/edit/{id}', [DataAdminController::class, 'edit']);
Route::post('/dataadmin/update/{id}', [DataAdminController::class, 'update']);
Route::get('/dataadmin/delete/{id}', [DataAdminController::class, 'delete']);
// Route::get('/dataadmin', [DataAdminController::class, 'index']);

//pelanggan
Route::get('/pelanggan', [PelangganController::class, 'index']);
Route::get('/pelanggan/create', [PelangganController::class, 'create']);
Route::post('/pelanggan', [PelangganController::class, 'store']);
Route::get('/pelanggan/{id}/edit', [PelangganController::class, 'edit']);
Route::put('/pelanggan/{id}', [PelangganController::class, 'update'])->name('pelanggan.update');
//Route::put('/pelanggan/{id}','PelangganController@update')->name('pelanggan.update');
Route::get('/pelanggan/{id}/delete', [PelangganController::class, 'destroy'])->name('pelanggan.destroy');

//barberman
Route::get('/barberman', [BarbermanController::class, 'index']);
Route::get('/barberman/create', [BarbermanController::class, 'create']);
Route::post('/barberman', [BarbermanController::class, 'store']);
Route::get('/barberman/{id}/edit', [BarbermanController::class, 'edit']);
Route::put('/barberman/{id}', [BarbermanController::class, 'update'])->name('barberman.update');
Route::get('/barberman/{id}/delete', [BarbermanController::class, 'destroy'])->name('barberman.destroy');

//paketbarber
Route::get('/paketbarber', [PaketBarberController::class, 'index']);
Route::get('/paketbarber/create', [PaketBarberController::class, 'create']);
Route::post('/paketbarber', [PaketBarberController::class, 'store']);
Route::get('/paketbarber/{id}/edit', [PaketBarberController::class, 'edit']);
Route::put('/paketbarber/{id}', [PaketBarberController::class, 'update'])->name('paketbarber.update');
Route::get('/paketbarber/{id}/delete', [PaketBarberController::class, 'destroy'])->name('paketbarber.destroy');

//pemesanan
Route::get('/pemesanan', [PemesananController::class, 'index'])->name('pemesanan');
Route::get('/pemesanan/delete/{id}', [PemesananController::class, 'delete']);
Route::get('/pemesanan/{id}/edit', [PemesananController::class, 'edit']);
Route::get('/pemesanan/bayar/{id}', [PemesananController::class, 'bayar']);
Route::get('/pemesanan/paket/{id}', [PemesananController::class, 'paket']);
Route::get('/pemesanan/add', [PemesananController::class, 'add']);
Route::get('/pemesanan/create', [PemesananController::class, 'create']);
Route::post('/pemesanan/insert', [PemesananController::class, 'insert']);
Route::get('/pemesanan/{id}', [PemesananController::class, 'show']);
Route::put('/pemesanan/{id}', [PemesananController::class, 'update'])->name('pemesanan.update');

//detailpemesanan
Route::get('/detailpemesanan', [DetailPemesananController::class, 'index'])->name('detailpemesanan');
Route::get('/detailpemesanan/delete/{id}', [DetailPemesananController::class, 'delete']);
Route::get('/detailpemesanan/add', [DetailPemesananController::class, 'add']);
Route::get('/detailpemesanan/create/{id}', [DetailPemesananController::class, 'create']);
Route::post('/detailpemesanan/insert', [DetailPemesananController::class, 'insert']);
Route::get('/detailpemesanan/show', [DetailPemesananController::class, 'show']);

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/datapelanggan', [App\Http\Controllers\PelangganController::class, 'index']);
