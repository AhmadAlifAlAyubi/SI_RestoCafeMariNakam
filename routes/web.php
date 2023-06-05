<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\tb_userController;
use App\Http\Controllers\tb_restoranController;
use App\Http\Controllers\tb_makananrestoController;
use App\Http\Controllers\tb_makanancafeController;
use App\Http\Controllers\tb_minumanrestoController;
use App\Http\Controllers\tb_minumancafeController;
use App\Http\Controllers\tb_cafeController;
use App\Http\Controllers\tb_pegawaiController;
use App\Http\Controllers\tb_pembeliController;
use App\Http\Controllers\tb_pesanan_restoranController;
use App\Http\Controllers\tb_pesanan_cafeController;
use App\Http\Controllers\tb_penilaian_restoranController;
use App\Http\Controllers\tb_penilaian_cafeController;
use App\Http\Controllers\tb_kriteria_restoranController;
use App\Http\Controllers\tb_kriteria_cafeController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/* dashboard */

Route::get('/', function () {
    return view('home');
})->name('home');



/* user */
Route::get('/user', function () {
    return view('tb_user.user',);
})->name('user');

Route::get('/tambah_user', function () {
    return view('tambah_user');
})->name('tambah_user');

Route::get('/tambah_user_edit', function () {
    return view('tambah_user-edit');
})->name('tambah_user-edit');

Route::get('/user', [tb_userController::class, 'index'])->name('userIndex');
Route::get('/userCreate', [tb_userController::class, 'create'])->name('userCreate');
Route::post('/userInsert', [tb_userController::class, 'insert'])->name('userInsert');
Route::get('/userEdit/{ID_User}', [tb_userController::class, 'edit'])->name('userEdit');
Route::post('/userUpdate/{ID_User}', [tb_userController::class, 'update'])->name('userUpdate');
Route::get('/userDelete/{ID_User}', [tb_userController::class, 'delete'])->name('userDelete');
Route::get('/userPDF', [tb_userController::class, 'exportPDF'])->name('userPDF');



/* Restoran */
Route::get('/restoran', function () {
    return view('restoran.restoran');
})->name('restoran');

Route::get('/tambah_resto', function () {
    return view('restoran.tambah_resto');
})->name('tambah_resto');

Route::get('/restoran', [tb_restoranController::class, 'index'])->name('restoranIndex');
Route::get('/restoranCreate', [tb_restoranController::class, 'create'])->name('restoranCreate');
Route::post('/restoranInsert', [tb_restoranController::class, 'insert'])->name('restoranInsert');
Route::get('/restoranEdit/{ID_Restoran}', [tb_restoranController::class, 'edit'])->name('restoranEdit');
Route::post('/restoranUpdate/{ID_Restoran}', [tb_restoranController::class, 'update'])->name('restoranUpdate');
Route::get('/restoranDelete/{ID_Restoran}', [tb_restoranController::class, 'delete'])->name('restoranDelete');
Route::get('/restoranPDF', [tb_restoranController::class, 'exportPDF'])->name('restoranPDF');

Route::get('/makanan resto', function () {
    return view('restoran.makananresto');
})->name('makananresto');

Route::get('/makananresto', [tb_makananrestoController::class, 'index'])->name('makananrestoIndex');
Route::get('/makananrestoCreate', [tb_makananrestoController::class, 'create'])->name('makananrestoCreate');
Route::post('/makananrestoInsert', [tb_makananrestoController::class, 'insert'])->name('makananrestoInsert');
Route::get('/makananrestoEdit/{ID_Makanan}', [tb_makananrestoController::class, 'edit'])->name('makananrestoEdit');
Route::post('/makananrestoUpdate/{ID_Makanan}', [tb_makananrestoController::class, 'update'])->name('makananrestoUpdate');
Route::get('/makananrestoDelete/{ID_Makanan}', [tb_makananrestoController::class, 'delete'])->name('makananrestoDelete');
Route::get('/makananrestoPDF', [tb_makananrestoController::class, 'exportPDF'])->name('makananrestoPDF');

Route::get('/tambah_makananresto', function () {
    return view('restoran.tambah_makananresto');
})->name('tambah_makananresto');

Route::get('/minuman resto', function () {
    return view('restoran.minumanresto');
})->name('minumanresto');

Route::get('/tambah_minumanresto', function () {
    return view('restoran.tambah_minumanresto');
})->name('tambah_minumanresto');

Route::get('/minumanresto', [tb_minumanrestoController::class, 'index'])->name('minumanrestoIndex');
Route::get('/minumanrestoCreate', [tb_minumanrestoController::class, 'create'])->name('minumanrestoCreate');
Route::post('/minumanrestoInsert', [tb_minumanrestoController::class, 'insert'])->name('minumanrestoInsert');
Route::get('/minumanrestoEdit/{ID_Minuman}', [tb_minumanrestoController::class, 'edit'])->name('minumanrestoEdit');
Route::post('/minumanrestoUpdate/{ID_Minuman}', [tb_minumanrestoController::class, 'update'])->name('minumanrestoUpdate');
Route::get('/minumanrestoDelete/{ID_Minuman}', [tb_minumanrestoController::class, 'delete'])->name('minumanrestoDelete');
Route::get('/minumanrestoPDF', [tb_minumanrestoController::class, 'exportPDF'])->name('minumanrestoPDF');
// Route::get('/gambar', [tb_minumanrestoController::class, 'Gambar'])->name('restoran.minumanresto');
/*coba*/

Route::get('/coba', function () {
    return view('coba');
})->name('coba');



/*Cafe*/
Route::get('/cafe', function () {
    return view('cafe.cafe');
})->name('cafe');

Route::get('/cafe', [tb_cafeController::class, 'index'])->name('cafeIndex');
Route::get('/cafeCreate', [tb_cafeController::class, 'create'])->name('cafeCreate');
Route::post('/cafeInsert', [tb_cafeController::class, 'insert'])->name('cafeInsert');
Route::get('/cafeEdit/{ID_Cafe}', [tb_cafeController::class, 'edit'])->name('cafeEdit');
Route::post('/cafeUpdate/{ID_Cafe}', [tb_cafeController::class, 'update'])->name('cafeUpdate');
Route::get('/cafeDelete/{ID_Cafe}', [tb_cafeController::class, 'delete'])->name('cafeDelete');
Route::get('/cafepdf', [tb_cafeController::class, 'exportPDF'])->name('cafepdf');

Route::get('/tambah_cafe', function () {
    return view('cafe.tambah_cafe');
})->name('tambah_cafe');

Route::get('/makanancafe', function () {
    return view('cafe.makanancafe');
})->name('makanancafe');

Route::get('/tambah_makanancafe', function () {
    return view('cafe.tambah_makanancafe');
})->name('tambah_makanancafe');

Route::get('/makanancafe', [tb_makanancafeController::class, 'index'])->name('makanancafeIndex');
Route::get('/makanancafeCreate', [tb_makanancafeController::class, 'create'])->name('makanancafeCreate');
Route::post('/makanancafeInsert', [tb_makanancafeController::class, 'insert'])->name('makanancafeInsert');
Route::get('/makanancafeEdit/{ID_Makanan}', [tb_makanancafeController::class, 'edit'])->name('makanancafeEdit');
Route::post('/makanancafeUpdate/{ID_Makanan}', [tb_makanancafeController::class, 'update'])->name('makanancafeUpdate');
Route::get('/makanancafeDelete/{ID_Makanan}', [tb_makanancafeController::class, 'delete'])->name('makanancafeDelete');
Route::get('/makanancafePDF', [tb_makanancafeController::class, 'exportPDF'])->name('makanancafePDF');

Route::get('/minumancafe', function () {
    return view('cafe.minumancafe');
})->name('minumancafe');

Route::get('/tambah_minumancafe', function () {
    return view('cafe.tambah_minumancafe');
})->name('tambah_minumancafe');

Route::get('/minumancafe', [tb_minumancafeController::class, 'index'])->name('minumancafeIndex');
Route::get('/minumancafeCreate', [tb_minumancafeController::class, 'create'])->name('minumancafeCreate');
Route::post('/minumancafeInsert', [tb_minumancafeController::class, 'insert'])->name('minumancafeInsert');
Route::get('/minumancafeEdit/{ID_Minuman}', [tb_minumancafeController::class, 'edit'])->name('minumancafeEdit');
Route::post('/minumancafeUpdate/{ID_Minuman}', [tb_minumancafeController::class, 'update'])->name('minumancafeUpdate');
Route::get('/minumancafeDelete/{ID_Minuman}', [tb_minumancafeController::class, 'delete'])->name('minumancafeDelete');
Route::get('/minumancafePDF', [tb_minumancafeController::class, 'exportPDF'])->name('minumancafePDF');

/* pembeli */
Route::get('/pembeli', function () {
    return view('pembeli.pembeli');
})->name('pembeli');

Route::get('/tambahpembeli', function () {
    return view('pembeli.tambahpembeli');
})->name('tambahpembeli');

Route::get('/pembeli', [tb_pembeliController::class, 'index'])->name('pembeli');
Route::get('/pembeliCreate', [tb_pembeliController::class, 'create'])->name('pembeliCreate');
Route::post('/pembeliInsert', [tb_pembeliController::class, 'insert'])->name('pembeliInsert');
Route::get('/pembeliEdit/{ID_Pelanggan}', [tb_pembeliController::class, 'edit'])->name('pembeliEdit');
Route::post('/pembeliUpdate/{ID_Pelanggan}', [tb_pembeliController::class, 'update'])->name('pembeliUpdate');
Route::get('/pembeliDelete/{ID_Pelanggan}', [tb_pembeliController::class, 'delete'])->name('pembeliDelete');
Route::get('/pembelipdf', [tb_pembeliController::class, 'exportPDF'])->name('pembelipdf');



/* pesanan */
Route::get('/pesanan
resto', function () {
    return view('pesanan.pesananresto');
})->name('pesanan_restoran');

Route::get('/tambah_pesananresto', function () {
    return view('pesanan.tambah_pesananresto');
})->name('tambah_pesananresto');

Route::get('/pesananresto', [tb_pesanan_restoranController::class, 'index'])->name('pesananresto');
Route::get('/pesananrestoCreate', [tb_pesanan_restoranController::class, 'create'])->name('pesananrestoCreate');
Route::post('/pesananrestoInsert', [tb_pesanan_restoranController::class, 'insert'])->name('pesananrestoInsert');
Route::get('/pesananrestoEdit/{ID_Pesanan_Restoran}', [tb_pesanan_restoranController::class, 'edit'])->name('pesananrestoEdit');
Route::post('/pesananrestoUpdate/{ID_Pesanan_Restoran}', [tb_pesanan_restoranController::class, 'update'])->name('pesananrestoUpdate');
Route::get('/pesananrestoDelete/{ID_Pesanan_Restoran}', [tb_pesanan_restoranController::class, 'delete'])->name('pesananrestoDelete');
Route::get('/pesananrestopdf', [tb_pesanan_restoranController::class, 'exportPDF'])->name('pesananrestopdf');


Route::get('/pesanancafe', function () {
    return view('pesanan.pesanancafe');
})->name('pesanancafe');

Route::get('/tambah_pesanancafe', function () {
    return view('pesanan.tambah_pesanancafe');
})->name('tambah_pesanancafe');

Route::get('/pesanancafe', [tb_pesanan_cafeController::class, 'index'])->name('pesanancafe');
Route::get('/pesanancafeCreate', [tb_pesanan_cafeController::class, 'create'])->name('pesanancafeCreate');
Route::post('/pesanancafeInsert', [tb_pesanan_cafeController::class, 'insert'])->name('pesanancafeInsert');
Route::get('/pesanancafeEdit/{ID_Pesanan_Cafe}', [tb_pesanan_cafeController::class, 'edit'])->name('pesanancafeEdit');
Route::post('/pesanancafeUpdate/{ID_Pesanan_Cafe}', [tb_pesanan_cafeController::class, 'update'])->name('pesanancafeUpdate');
Route::get('/pesanancafeDelete/{ID_Pesanan_Cafe}', [tb_pesanan_cafeController::class, 'delete'])->name('pesanancafeDelete');
Route::get('/pesanancafepdf', [tb_pesanan_cafeController::class, 'exportPDF'])->name('pesanancafepdf');


/* pegawai */
Route::get('/tambahpegawai', function () {
    return view('pegawai.tambahpegawai');
})->name('tambahpegawai');

Route::get('/pegawai', [tb_pegawaiController::class, 'index'])->name('pegawai');
Route::get('/pegawaiCreate', [tb_pegawaiController::class, 'create'])->name('pegawaiCreate');
Route::post('/pegawaiInsert', [tb_pegawaiController::class, 'insert'])->name('pegawaiInsert');
Route::get('/pegawaiEdit/{ID_Pegawai}', [tb_pegawaiController::class, 'edit'])->name('pegawaiEdit');
Route::post('/pegawaiUpdate/{ID_Pegawai}', [tb_pegawaiController::class, 'update'])->name('pegawaiUpdate');
Route::get('/pegawaiDelete/{ID_Pegawai}', [tb_pegawaiController::class, 'delete'])->name('pegawaiDelete');
Route::get('/pegawaipdf', [tb_pegawaiController::class, 'exportPDF'])->name('pegawaipdf');



/* Penilaian */
Route::get('/penilaianresto', function () {
    return view('penilaian.penilaianresto');
})->name('penilaianresto');

Route::get('/tambah_penilaianresto', function () {
    return view('penilaian.tambah_penilaianresto');
})->name('tambah_penilaianresto');

Route::get('/penilaianresto', [tb_penilaian_restoranController::class, 'index'])->name('penilaianresto');
Route::get('/penilaianrestoCreate', [tb_penilaian_restoranController::class, 'create'])->name('penilaianrestoCreate');
Route::post('/penilaianrestoInsert', [tb_penilaian_restoranController::class, 'insert'])->name('penilaianrestoInsert');
Route::get('/penilaianrestoEdit/{ID_Penilaian_Restoran}', [tb_penilaian_restoranController::class, 'edit'])->name('penilaianrestoEdit');
Route::post('/penilaianrestoUpdate/{ID_Penilaian_Restoran}', [tb_penilaian_restoranController::class, 'update'])->name('penilaianrestoUpdate');
Route::get('/penilaianrestoDelete/{ID_Penilaian_Restoran}', [tb_penilaian_restoranController::class, 'delete'])->name('penilaianrestoDelete');
Route::get('/penilaianrestopdf', [tb_penilaian_restoranController::class, 'exportPDF'])->name('penilaianrestopdf');


Route::get('/penilaiancafe', function () {
    return view('penilaian.penilaiancafe');
})->name('penilaiancafe');

Route::get('/tambah_penilaiancafe', function () {
    return view('penilaian.tambah_penilaiancafe');
})->name('tambah_penilaiancafe');

Route::get('/penilaiancafe', [tb_penilaian_cafeController::class, 'index'])->name('penilaiancafeIndex');
Route::get('/penilaiancafeCreate', [tb_penilaian_cafeController::class, 'create'])->name('penilaiancafeCreate');
Route::post('/penilaiancafeInsert', [tb_penilaian_cafeController::class, 'insert'])->name('penilaiancafeInsert');
Route::get('/penilaiancafeEdit/{ID_Penilaian_Cafe}', [tb_penilaian_cafeController::class, 'edit'])->name('penilaiancafeEdit');
Route::post('/penilaiancafeUpdate/{ID_Penilaian_Cafe}', [tb_penilaian_cafeController::class, 'update'])->name('penilaiancafeUpdate');
Route::get('/penilaiancafeDelete/{ID_Penilaian_Cafe}', [tb_penilaian_cafeController::class, 'delete'])->name('penilaiancafeDelete');
Route::get('/penilaiancafepdf', [tb_penilaian_cafeController::class, 'exportPDF'])->name('penilaiancafepdf');


/* kriteria */
Route::get('/kriteriaresto', function () {
    return view('kriteria.kriteriaresto');
})->name('kriteriaresto');

Route::get('/tambah_kriteriaresto', function () {
    return view('kriteria.tambah_kriteriaresto');
})->name('tambah_kriteriaresto');

Route::get('/kriteriaresto', [tb_kriteria_restoranController::class, 'index'])->name('kriteriarestoIndex');
Route::get('/kriteriarestoCreate', [tb_kriteria_restoranController::class, 'create'])->name('kriteriarestoCreate');
Route::post('/kriteriarestoInsert', [tb_kriteria_restoranController::class, 'insert'])->name('kriteriarestoInsert');
Route::get('/kriteriarestoEdit/{ID_Kriteria_Restoran}', [tb_kriteria_restoranController::class, 'edit'])->name('kriteriarestoEdit');
Route::post('/kriteriarestoUpdate/{ID_Kriteria_Restoran}', [tb_kriteria_restoranController::class, 'update'])->name('kriteriarestoUpdate');
Route::get('/kriteriarestoDelete/{ID_Kriteria_Restoran}', [tb_kriteria_restoranController::class, 'delete'])->name('kriteriarestoDelete');
Route::get('/kriteriarestopdf', [tb_kriteria_restoranController::class, 'exportPDF'])->name('kriteriarestopdf');

Route::get('/kriteriacafe', function () {
    return view('kriteria.kriteriacafe');
})->name('kriteriacafe');

Route::get('/tambah_kriteriacafe', function () {
    return view('kriteria.tambah_kriteriacafe');
})->name('tambah_kriteriacafe');

Route::get('/kriteriacafe', [tb_kriteria_cafeController::class, 'index'])->name('kriteriacafeIndex');
Route::get('/kriteriacafeCreate', [tb_kriteria_cafeController::class, 'create'])->name('kriteriacafeCreate');
Route::post('/kriteriacafeInsert', [tb_kriteria_cafeController::class, 'insert'])->name('kriteriacafeInsert');
Route::get('/kriteriacafeEdit/{ID_Kriteria_Restoran}', [tb_kriteria_cafeController::class, 'edit'])->name('kriteriacafeEdit');
Route::post('/kriteriacafeUpdate/{ID_Kriteria_Restoran}', [tb_kriteria_cafeController::class, 'update'])->name('kriteriacafeUpdate');
Route::get('/kriteriacafeDelete/{ID_Kriteria_Restoran}', [tb_kriteria_cafeController::class, 'delete'])->name('kriteriacafeDelete');
Route::get('/kriteriacafepdf', [tb_kriteria_cafeController::class, 'exportPDF'])->name('kriteriacafepdf');
