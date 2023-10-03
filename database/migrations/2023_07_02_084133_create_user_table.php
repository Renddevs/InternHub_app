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
        Schema::create('user', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('id_role');
            $table->string('username');
            $table->string('password');
            $table->string('create_by');
            $table->datetime('created_at');
            $table->string('update_by')->nullable();
            $table->datetime('updated_at')->nullable();
            $table->rememberToken();
            $table->foreign('id_role')->references('id')->on('ref_role')->onDelete('cascade'); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user');
    }
};
