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
        Schema::create('data_saranas', function (Blueprint $table) {
            $table->id();
            $table->string('jenis_prasarana');
            $table->integer('jumlah_ruang')->nullable();
            $table->integer('jumlah_ruang_kondisi_baik')->nullable();
            $table->integer('jumlah_ruang_kondisi_rusak')->nullable();
            $table->integer('Kategori_kerusakan_ringan')->nullable();
            $table->integer('Kategori_kerusakan_sedang')->nullable();
            $table->integer('Kategori_kerusakan_berat')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_saranas');
    }
};
