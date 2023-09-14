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
        Schema::create('trs_bimbingan_kp', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('id_trs_pendaftaran_kp');
            $table->uuid('id_mst_mahasiswa');
            $table->uuid('id_mst_dosen');
            $table->text('topik_bimbingan');
            $table->boolean('is_verif');
            $table->datetime('tgl_bimbingan');
            $table->foreign('id_trs_pendaftaran_kp')->references('id')->on('trs_pendaftaran_kp');
            $table->foreign('id_mst_mahasiswa')->references('id')->on('mst_mahasiswa');
            $table->foreign('id_mst_dosen')->references('id')->on('mst_dosen');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trs_bimbingan_kp');
    }
};
