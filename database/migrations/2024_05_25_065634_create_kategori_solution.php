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
        Schema::create('kategori_solution', function (Blueprint $table) {
            $table->smallIncrements("id_kategori_solution");
            $table->string("nama_kategori", 15);
            $table->text('deskripsi_kategori');
            $table->string("slug");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kategori_solution');
    }
};
