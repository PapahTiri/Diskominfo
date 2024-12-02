<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pegawai extends Model
{
    use HasFactory;

    protected $table = 'pegawai';

    protected $fillable = [
        'nama_pegawai',
        'jabatan',
        'unit_kerja',
        'organisasi_perangkat_daerah',
        'foto_pegawai',
        'id_kategori'
    ];


    public function kategoriPegawai()
    {
        return $this->belongsTo(KategoriPegawai::class, 'id_kategori');
    }

    protected static function booted()
    {
        // Event ketika data dihapus
        static::deleted(function ($pegawai) {
            // Menghapus file foto dari storage saat pegawai dihapus
            if ($pegawai->foto_pegawai && Storage::disk('public')->exists($pegawai->foto_pegawai)) {
                Storage::disk('public')->delete($pegawai->foto_pegawai);
            }
        });

        // Event ketika data diupdate
        static::updating(function ($pegawai) {
            // Cek jika foto diganti
            if ($pegawai->isDirty('foto_pegawai')) {
                $oldFoto = $pegawai->getOriginal('foto_pegawai');

                // Hapus foto lama dari storage jika ada
                if ($oldFoto && Storage::disk('public')->exists($oldFoto)) {
                    Storage::disk('public')->delete($oldFoto);
                }
            }
        });
    }
}
