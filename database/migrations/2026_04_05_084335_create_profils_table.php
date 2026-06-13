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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 32)->nullable();
            $table->integer('nsm')->nullable();
            $table->integer('npsn')->nullable();
            $table->string("akreditasi")->nullable();
            $table->string('npwp')->nullable();
            $table->string('kepala_sekolah')->nullable();
            $table->integer("nip")->nullable();
            $table->string('email')->nullable();
            $table->string("izin_pendirian")->nullable();
            $table->string("izin_operasional")->nullable();
            $table->string('kepemilikan_tanah')->nullable();
            $table->string('status_tanah')->nullable();
            $table->integer('luas_tanah')->nullable();
            $table->string('status_bangunan')->nullable();
            $table->integer('luas_bangunan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
