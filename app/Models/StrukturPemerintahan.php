<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class StrukturPemerintahan extends Model
{
    use HasFactory;

    protected $table = 'struktur_pemerintahan';

    protected $fillable = ['gambar'];

    protected static function booted()
    {
        static::deleted(function ($struktur_pemerintahan) {
            // Menghapus file gambar dari storage
            if ($struktur_pemerintahan->gambar && Storage::disk('public')->exists($struktur_pemerintahan->gambar)) {
                Storage::disk('public')->delete($struktur_pemerintahan->gambar);
            }
        });

        static::updating(function ($struktur_pemerintahan) {
            // Cek jika gambar diganti
            if ($struktur_pemerintahan->isDirty('gambar')) {
                $oldImage = $struktur_pemerintahan->getOriginal('gambar');

                // Hapus gambar lama dari storage jika ada
                if ($oldImage && Storage::disk('public')->exists($oldImage)) {
                    Storage::disk('public')->delete($oldImage);
                }
            }
        });
    }
}
