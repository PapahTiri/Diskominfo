<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Layanan extends Model
{
    use HasFactory;

    protected $table = 'layanan';

    protected $fillable = [
        'nama_layanan',
        'deskripsi',
        'link_akses',
        'syarat_mekanisme',
        'file_dokumen',
        'id_kategori'
    ];

    public function kategoriLayanan()
    {
        return $this->belongsTo(KategoriLayanan::class, 'id_kategori');
    }


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
        static::deleted(function ($layanan) {
            // Menghapus file dokumen dari storage saat layanan dihapus
            if ($layanan->file_dokumen && Storage::disk('public')->exists('uploads/layanan/' . $layanan->file_dokumen)) {
                Storage::disk('public')->delete('uploads/layanan/' . $layanan->file_dokumen);
            }
        });

        // Event ketika data diupdate
        static::updating(function ($layanan) {
            // Cek jika file dokumen diganti
            if ($layanan->isDirty('file_dokumen')) {
                $oldFile = $layanan->getOriginal('file_dokumen');

                // Hapus file lama dari storage jika ada
                if ($oldFile && Storage::disk('public')->exists('uploads/layanan/' . $oldFile)) {
                    Storage::disk('public')->delete('uploads/layanan/' . $oldFile);
                }
            }
        });
    }
}
