<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MonografiKelurahan extends Model
{
    use HasFactory;

    protected $table = 'monografi_kelurahan';

    protected $fillable = ['file_dokumen'];

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
        static::deleted(function ($monografi_kelurahan) {
            // Menghapus file dokumen dari storage saat regulasi dihapus
            if ($monografi_kelurahan->file_dokumen && Storage::disk('public')->exists('uploads/monografi/' . $monografi_kelurahan->file_dokumen)) {
                Storage::disk('public')->delete('uploads/monografi/' . $monografi_kelurahan->file_dokumen);
            }
        });

        // Event ketika data diupdate
        static::updating(function ($monografi_kelurahan) {
            // Cek jika file dokumen diganti
            if ($monografi_kelurahan->isDirty('file_dokumen')) {
                $oldFile = $monografi_kelurahan->getOriginal('file_dokumen');

                // Hapus file lama dari storage jika ada
                if ($oldFile && Storage::disk('public')->exists('uploads/monografi/' . $oldFile)) {
                    Storage::disk('public')->delete('uploads/monografi/' . $oldFile);
                }
            }
        });
    }
}
