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
        Schema::create('data_siswas', function (Blueprint $table) {
            $table->id();
            $table->string('tahun_ajaran', 10);
            $table->integer('jumlah_siswa_vii')->nullable();
            $table->integer('jumlah_rombel_vii')->nullable();
            $table->integer('jumlah_siswa_viii')->nullable();
            $table->integer('jumlah_rombel_viii')->nullable();
            $table->integer('jumlah_siswa_ix')->nullable();
            $table->integer('jumlah_rombel_ix')->nullable();
            $table->integer('jumlah_siswa')->nullable();
            $table->integer('jumlah_rombel')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_siswas');
    }
};
