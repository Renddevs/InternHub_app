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
        Schema::create('trs_pendaftaran_kp', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->integer('tahun');
            $table->date('tgl_mulai');
            $table->date('tgl_akhir');
            $table->boolean('is_susulan');
            $table->string('keterangan');
            $table->string('create_by');
            $table->datetime('created_at');
            $table->string('update_by')->nullable();
            $table->datetime('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trs_pendaftaran_kp');
    }
};
