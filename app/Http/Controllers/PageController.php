<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Galeri;
use App\Models\Layanan;
use App\Models\Carousel;
use App\Models\Regulasi;
use App\Models\kelembagaan;
use Illuminate\Http\Request;
use App\Models\KategoriBerita;
use App\Models\ProfilKelurahan;
use App\Models\MonografiKelurahan;
use App\Models\StrukturPemerintahan;
use Illuminate\Support\Facades\Storage;

class PageController extends Controller
{
    public function beranda(){

        $useLargeHeader = true;

        $profil_kelurahan = ProfilKelurahan::first();
        $galeri = Galeri::find(4);
        $berita = Berita::all();
        // $kategori = KategoriBerita::find($id_kategori);

        return view('web.pages.beranda.index')
        ->with('useLargeHeader', $useLargeHeader)
        ->with('profil_kelurahan', $profil_kelurahan)
        ->with('galeri', $galeri)
        ->with('berita', $berita);
        // ->with('kategori', $kategori);
    }

    public function profil_kelurahan(){

        $useLargeHeader = false;

        $profil_kelurahan = ProfilKelurahan::first();
        // $kategori = KategoriBerita::find($id_kategori);

        return view('web.pages.profil-kelurahan.index')
                ->with('useLargeHeader', $useLargeHeader)
                ->with('profil_kelurahan', $profil_kelurahan);
                // ->with('kategori', $kategori);
    }
 
    public function galeri(){

        $useLargeHeader = false;

        $profil_kelurahan = ProfilKelurahan::first();
        $galeri = Galeri::all();
        // $kategori = KategoriBerita::find($id_kategori);

        return view('web.pages.profil-kelurahan.galeri.index')
        ->with('useLargeHeader', $useLargeHeader)
        ->with('profil_kelurahan', $profil_kelurahan)
        ->with('galeri', $galeri);
        // ->with('kategori', $kategori);
    }

    public function visi_misi(){

        $useLargeHeader = false;

        $profil_kelurahan = ProfilKelurahan::first();
        $carousel= Carousel::all();
        // $kategori = KategoriBerita::find($id_kategori);

        return view('web.pages.profil-kelurahan.visi-misi.index')
        ->with('useLargeHeader', $useLargeHeader)
        ->with('profil_kelurahan', $profil_kelurahan)
        ->with('carousel', $carousel);
        // ->with('kategori', $kategori);
    }

    public function berita(){

        $useLargeHeader = false;

        $profil_kelurahan = ProfilKelurahan::first();
        $berita = Berita::all();
        // $kategori = KategoriBerita::find($id_kategori);
       
        if ($berita->isEmpty()) {
            return view('errors.index');
        }

        return view('web.pages.berita.index')
        ->with('useLargeHeader', $useLargeHeader)
        ->with('profil_kelurahan', $profil_kelurahan)
        ->with('berita', $berita);
        // ->with('kategori', $kategori);
    }

    public function detail_berita($id){

        $profil_kelurahan = ProfilKelurahan::first();
        $berita = Berita::find($id);
        $kategori =KategoriBerita::where('id', '!=', $id)->get();

        if ($berita->isEmpty()) {
            return view('errors.index');
        }

    return view('web.pages.berita.detail', compact('berita', 'profil_kelurahan', 'kategori'));
    }

    public function renderBidang($id_kategori, $view)
{
    $useLargeHeader = false;

    // Ambil data profil kelurahan
    $profil_kelurahan = ProfilKelurahan::first();

    // Ambil berita berdasarkan kategori
    $berita = Berita::where('id_kategori', $id_kategori)->get();

    // Ambil kategori berdasarkan id
    $kategori = KategoriBerita::find($id_kategori);

    // Periksa jika berita tidak ada
    if ($berita->isEmpty()) {
        abort(404); // Arahkan ke halaman error 404
    }

    // Periksa jika profil kelurahan tidak ada
    if (!$profil_kelurahan) {
        abort(404); // Arahkan ke halaman error 404
    }

    // Kembalikan tampilan dengan data yang diperlukan
    return view($view)
        ->with('useLargeHeader', $useLargeHeader)
        ->with('profil_kelurahan', $profil_kelurahan)
        ->with('berita', $berita)
        ->with('kategori', $kategori);
}

    
    // Fungsi untuk bidang kesehatan
    public function bidang_kesehatan($id_kategori)
    {
        return $this->renderBidang($id_kategori, 'web.pages.berita.bidang-kesehatan.index');
    }
    
    // Fungsi untuk bidang kambtibmas
    public function bidang_kambtibmas($id_kategori)
    {
        return $this->renderBidang($id_kategori, 'web.pages.berita.bidang-kambtibmas.index');
    }
    
    // Fungsi untuk bidang pendidikan
    public function bidang_pendidikan($id_kategori)
    {
        return $this->renderBidang($id_kategori, 'web.pages.berita.bidang-pendidikan.index');
    }
    
    // Fungsi untuk bidang pariwisata
    public function bidang_pariwisata($id_kategori)
    {
        return $this->renderBidang($id_kategori, 'web.pages.berita.bidang-pariwisata.index');
    }

    public function renderLembaga($view){
        $useLargeHeader = false;

        // Ambil data profil kelurahan
        $profil_kelurahan = ProfilKelurahan::first();
    

        // Periksa jika profil kelurahan tidak ada
        if (!$profil_kelurahan) {
            abort(404); // Arahkan ke halaman error 404
        }

    // Kembalikan tampilan dengan data yang diperlukan
    return view($view)
        ->with('useLargeHeader', $useLargeHeader)
        ->with('profil_kelurahan', $profil_kelurahan);
    }

    public function lembaga(){
        return $this->renderLembaga('web.pages.kelembagaan.index');
    }

    public function UMKM()
    {
        return $this->renderLembaga('web.pages.kelembagaan.UMKM.index');
    }

    public function LPMK()
    {
        return $this->renderLembaga('web.pages.kelembagaan.LPMK.index');
    }

    public function PKK()
    {
        return $this->renderLembaga('web.pages.kelembagaan.PKK.index');
    }

    public function BKM()
    {
        return $this->renderLembaga('web.pages.kelembagaan.BKM.index');
    }

    public function geografi_penduduk() {

        $useLargeHeader = false;
        $profil_kelurahan = ProfilKelurahan::first();

        return view('web.pages.profil-kelurahan.geografi-penduduk.index')
        ->with('useLargeHeader', $useLargeHeader)
        ->with('profil_kelurahan', $profil_kelurahan);
    }

    public function struktur_pemerintahan() {

        $useLargeHeader = false;
        $profil_kelurahan = ProfilKelurahan::first();
        $struktur = StrukturPemerintahan::first();

        return view('web.pages.profil-kelurahan.struktur-pemerintahan.index')
        ->with('useLargeHeader', $useLargeHeader)
        ->with('profil_kelurahan', $profil_kelurahan)
        ->with('struktur', $struktur);
    }

    public function regulasi() {

        $useLargeHeader = false;
        $profil_kelurahan = ProfilKelurahan::first();
        $regulasi = Regulasi::all();

        return view('web.pages.profil-kelurahan.regulasi.index')
        ->with('useLargeHeader', $useLargeHeader)
        ->with('profil_kelurahan', $profil_kelurahan)
        ->with('regulasi', $regulasi);
    }

    public function lihatDokumen()
    {
        $regulasi = Regulasi::all();

        return view('web.pages.profil-kelurahan.regulasi.show')
        ->with('regulasi', $regulasi);
    }

    public function monografi()
    {
        $useLargeHeader = false;

        $monografi = MonografiKelurahan::first();
        $profil_kelurahan = ProfilKelurahan::first();

        return view('web.pages.profil-kelurahan.monografi.index')
        ->with('useLargeHeader', $useLargeHeader)
        ->with('profil_kelurahan', $profil_kelurahan)
        ->with('monografi', $monografi);
    }

    public function layanan(){

        $useLargeHeader = false;
        $profil_kelurahan = ProfilKelurahan::first();
        $layanan = Layanan::all();

        return view('web.pages.layanan.index')
        ->with('useLargeHeader', $useLargeHeader)
        ->with('profil_kelurahan', $profil_kelurahan)
        ->with('layanan', $layanan);
    }

    public function Detail_layanan($id){

        $useLargeHeader = false;
        $profil_kelurahan = ProfilKelurahan::first();
        $layanan = Layanan::findOrFail($id);

        return view('web.pages.layanan.detail_content')
        ->with('useLargeHeader', $useLargeHeader)
        ->with('profil_kelurahan', $profil_kelurahan)
        ->with('layanan', $layanan);
    }
    

}