<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Regulasi extends Model
{
    use HasFactory;

    protected $table = 'regulasi';

    protected $fillable = [
        'peraturan',
        'tentang',
        'nomor',
        'tahun',
        'file_dokumen',
    ];

    protected static function boot()
    {
        parent::boot();

        static::saving(function ($model) {
            // Ambil nama file dari path yang di-upload
            if ($model->file_dokumen) {
                $model->file_dokumen = basename($model->file_dokumen);
            }
        });
    }

    protected static function booted()
    {
        // Event ketika data dihapus
        static::deleted(function ($regulasi) {
            // Menghapus file dokumen dari storage saat regulasi dihapus
            if ($regulasi->file_dokumen && Storage::disk('public')->exists('uploads/regulasi/' . $regulasi->file_dokumen)) {
                Storage::disk('public')->delete('uploads/regulasi/' . $regulasi->file_dokumen);
            }
        });

        // Event ketika data diupdate
        static::updating(function ($regulasi) {
            // Cek jika file dokumen diganti
            if ($regulasi->isDirty('file_dokumen')) {
                $oldFile = $regulasi->getOriginal('file_dokumen');

                // Hapus file lama dari storage jika ada
                if ($oldFile && Storage::disk('public')->exists('uploads/regulasi/' . $oldFile)) {
                    Storage::disk('public')->delete('uploads/regulasi/' . $oldFile);
                }
            }
        });
    }
}
