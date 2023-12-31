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
        Schema::create('mst_media', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('name');
            $table->string('original_name');
            $table->string('extension');
            $table->string('folder');
            $table->string('create_by');
            $table->datetime('created_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mst_media');
    }
};
