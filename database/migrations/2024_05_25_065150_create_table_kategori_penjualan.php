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
        Schema::create('kategori_penjualan', function (Blueprint $table) {
            $table->smallIncrements('id_kategori_penjualan');
            $table->string('nama_kategori', 10);
            $table->text('deskripsi_kategori')->nullable();
            $table->string('slug_kategori_penjualan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kategori_penjualan');
    }
};
