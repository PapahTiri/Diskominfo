<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [PageController::class, 'beranda'])->name('beranda');
Route::get('/profil-kelurahan', [PageController::class, 'profil_kelurahan'])->name('profil_kelurahan');
Route::get('/galeri', [PageController::class, 'galeri'])->name('galeri');
Route::get('/visi-misi', [PageController::class, 'visi_misi'])->name('visi-misi');
Route::get('/berita', [PageController::class, 'berita'])->name('berita');
Route::get('/geografi-penduduk', [PageController::class, 'geografi_penduduk'])->name('geografi-penduduk');
Route::get('/struktur-pemerintahan', [PageController::class, 'struktur_pemerintahan'])->name('struktur-pemerintahan');
Route::get('/berita/{id}', [PageController::class, 'detail_berita'])->name('berita.detail_berita');
Route::get('berita/bidang-kesehatan/{id_kategori}', [PageController::class, 'bidang_kesehatan'])->name('berita.bidang_kesehatan');
Route::get('berita/bidang-pendidikan/{id_kategori}', [PageController::class, 'bidang_pendidikan'])->name('berita.bidang_pendidikan');
Route::get('berita/bidang-kambtibmas/{id_kategori}', [PageController::class, 'bidang_kambtibmas'])->name('berita.bidang_kambtibmas');
Route::get('berita/bidang-pariwisata/{id_kategori}', [PageController::class, 'bidang_pariwisata'])->name('berita.bidang_pariwisata');
Route::view('/404', 'errors.404')->name('errors.404');

Route::get('/kelembagaan', [PageController::class, 'lembaga'])->name('lembaga');
Route::get('/UMKM', [PageController::class, 'UMKM'])->name('UMKM');
Route::get('/LPMK', [PageController::class, 'LPMK'])->name('LPMK');
Route::get('/PKK', [PageController::class, 'PKK'])->name('PKK');
Route::get('/BKM', [PageController::class, 'BKM'])->name('BKM');

Route::get('/regulasi', [PageController::class,'regulasi'])->name('regulasi');
Route::get('/lihat-dokumen/{file}', [PageController::class,'lihatDokumen'])->name('lihat-dokument');

Route::get('monografi-kelurahan', [PageController::class, 'monografi'])->name('monografi-kelurahan');
Route::get('monografi/{file}', [PageController::class, 'monografi'])->name('monografi');

Route::get('layanan', [PageController::class, 'layanan'])->name('layanan');
Route::get('layanan/{id}/syarat-mekanisme', [PageController::class, 'Detail_layanan'])->name('layanan.syarat_mekanisme');


