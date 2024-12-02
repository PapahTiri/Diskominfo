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
        Schema::create('daftar_informasi', function (Blueprint $table) {
            $table->id();
            $table->string('nama_informasi');
            $table->foreignId('id_kategori')->nullable()->constrained('kategori_daftar_informasi')->onDelete('set null');
            $table->string('file_dokumen');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('daftar_informasi');
    }
};
