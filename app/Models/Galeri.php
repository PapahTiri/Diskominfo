<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Galeri extends Model
{
    use HasFactory;

    protected $table = 'galeri';

    protected $fillable = ['gambar'];

    protected static function booted()
    {
        static::deleted(function ($galeri) {
            // Menghapus file gambar dari storage
            if ($galeri->gambar && Storage::disk('public')->exists($galeri->gambar)) {
                Storage::disk('public')->delete($galeri->gambar);
            }
        });

        static::updating(function ($galeri) {
            // Cek jika gambar diganti
            if ($galeri->isDirty('gambar')) {
                $oldImage = $galeri->getOriginal('gambar');

                // Hapus gambar lama dari storage jika ada
                if ($oldImage && Storage::disk('public')->exists($oldImage)) {
                    Storage::disk('public')->delete($oldImage);
                }
            }
        });
    }
}
