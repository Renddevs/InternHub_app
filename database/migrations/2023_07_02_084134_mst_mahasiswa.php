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
        Schema::create('mst_mahasiswa', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('id_user');
            $table->uuid('id_ref_prodi');
            $table->string('npm');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('create_by');
            $table->datetime('created_at');
            $table->string('update_by')->nullable();
            $table->datetime('updated_at')->nullable();
            $table->foreign('id_user')->references('id')->on('user');
            $table->foreign('id_ref_prodi')->references('id')->on('ref_prodi');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Schema::dropIfExists('mst_mahasiswa');
    }
};
