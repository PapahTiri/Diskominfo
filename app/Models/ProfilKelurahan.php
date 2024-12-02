<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProfilKelurahan extends Model
{
    use HasFactory;

    protected $table = 'profil_kelurahan';

    protected $fillable = [
        'nama_kelurahan',
        'alamat',
        'nomor_telepon',
        'email',
        'luas_wilayah',
        'visi',
        'misi',
        'jumlah_penduduk_laki_laki',
        'jumlah_penduduk_perempuan',
        'logo_kelurahan',
    ];

    protected static function booted()
    {
        static::deleted(function ($profil_kelurahan) {
            // Menghapus file logo_kelurahan dari storage
            if ($profil_kelurahan->logo_kelurahan && Storage::disk('public')->exists($profil_kelurahan->logo_kelurahan)) {
                Storage::disk('public')->delete($profil_kelurahan->logo_kelurahan);
            }
        });

        static::updating(function ($profil_kelurahan) {
            // Cek jika logo_kelurahan diganti
            if ($profil_kelurahan->isDirty('logo_kelurahan')) {
                $oldImage = $profil_kelurahan->getOriginal('logo_kelurahan');

                // Hapus logo_kelurahan lama dari storage jika ada
                if ($oldImage && Storage::disk('public')->exists($oldImage)) {
                    Storage::disk('public')->delete($oldImage);
                }
            }
        });
    }
}
