<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Berita extends Model
{
    use HasFactory;

    protected $table = 'berita';

    protected $fillable = ['judul', 'deskripsi', 'gambar', 'tanggal_posting', 'id_kategori'];

    public function kategoriBerita()
    {
        return $this->belongsTo(KategoriBerita::class, 'id_kategori');
    }

    protected static function booted()
    {
        static::deleted(function ($berita) {
            // Menghapus file gambar dari storage
            if ($berita->gambar && Storage::disk('public')->exists($berita->gambar)) {
                Storage::disk('public')->delete($berita->gambar);
            }
        });

        static::updating(function ($berita) {
            // Cek jika gambar diganti
            if ($berita->isDirty('gambar')) {
                $oldImage = $berita->getOriginal('gambar');

                // Hapus gambar lama dari storage jika ada
                if ($oldImage && Storage::disk('public')->exists($oldImage)) {
                    Storage::disk('public')->delete($oldImage);
                }
            }
        });
    }
}
