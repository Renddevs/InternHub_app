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
        Schema::create('ref_prodi', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('prodi_name');
            $table->integer('tahun_ajaran');
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
        Schema::dropIfExists('ref_prodi');
    }
};
