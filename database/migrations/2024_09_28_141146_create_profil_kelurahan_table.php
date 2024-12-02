<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('profil_kelurahan', function (Blueprint $table) {
            $table->id();
            $table->string('nama_kelurahan');
            $table->text('alamat');
            $table->string('nomor_telepon');
            $table->string('email');
            $table->float('luas_wilayah');
            $table->text('visi');
            $table->text('misi');
            $table->integer('jumlah_penduduk_laki_laki');
            $table->integer('jumlah_penduduk_perempuan');
            $table->integer('total_penduduk')->virtualAs('jumlah_penduduk_laki_laki + jumlah_penduduk_perempuan');
            $table->string('logo_kelurahan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profil_kelurahan');
    }
};
