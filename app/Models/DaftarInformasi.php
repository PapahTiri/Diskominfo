<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DaftarInformasi extends Model
{
    use HasFactory;

    protected $table = 'daftar_informasi';

    protected $fillable = ['nama_informasi', 'id_kategori', 'file_dokumen'];

    public function kategoriDaftarInformasi()
    {
        return $this->belongsTo(KategoriDaftarInformasi::class, 'id_kategori');
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
        static::deleted(function ($daftar_informasi) {
            // Menghapus file dokumen dari storage saat daftar informasi dihapus
            if ($daftar_informasi->file_dokumen && Storage::disk('public')->exists('uploads/informasi/' . $daftar_informasi->file_dokumen)) {
                Storage::disk('public')->delete('uploads/informasi/' . $daftar_informasi->file_dokumen);
            }
        });

        // Event ketika data diupdate
        static::updating(function ($daftar_informasi) {
            // Cek jika file dokumen diganti
            if ($daftar_informasi->isDirty('file_dokumen')) {
                $oldFile = $daftar_informasi->getOriginal('file_dokumen');

                // Hapus file lama dari storage jika ada
                if ($oldFile && Storage::disk('public')->exists('uploads/informasi/' . $oldFile)) {
                    Storage::disk('public')->delete('uploads/informasi/' . $oldFile);
                }
            }
        });
    }
}
