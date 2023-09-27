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
        Schema::create('trs_pengajuan_tkp', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('id_trs_pendaftaran_kp');
            $table->uuid('id_mst_mahasiswa');
            $table->string('nama_perusahaan');
            $table->string('nama_penanggung_jawab');
            $table->string('email_perusahaan');
            $table->string('noHp_penanggung_jawab');
            $table->text('keterangan');
            $table->datetime('tgl_pengajuan');
            $table->foreign('id_trs_pendaftaran_kp')->references('id')->on('trs_pendaftaran_kp');
            $table->foreign('id_mst_mahasiswa')->references('id')->on('mst_mahasiswa');
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
