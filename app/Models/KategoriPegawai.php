<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriPegawai extends Model
{
    use HasFactory;

    protected $table = 'kategori_pegawai';

    protected $fillable = ['nama_kategori'];

    public function pegawai()
    {
        return $this->hasMany(Pegawai::class, 'id_kategori');
    }
}
