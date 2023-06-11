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
        Schema::create('tb_sopir', function (Blueprint $table) {
            $table->integer('id_sopir')->primary();
            $table->string('nama_sopir');
            $table->string('umur_sopir');
            $table->integer('Pengalaman');
            $table->string('NIK');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_sopir');
    }
};
