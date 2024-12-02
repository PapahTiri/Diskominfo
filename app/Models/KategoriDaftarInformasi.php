<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriDaftarInformasi extends Model
{
    use HasFactory;

    protected $table = 'kategori_daftar_informasi';

    protected $fillable = ['nama_kategori'];

    public function daftarInformasi()
    {
        return $this->hasMany(DaftarInformasi::class, 'id_kategori');
    }
}
