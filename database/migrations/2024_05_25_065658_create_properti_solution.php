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
        Schema::create('properti_solution', function (Blueprint $table) {
            $table->increments("id_properti_solution");
            $table->string("nama_solution");
            $table->string("slug");
            $table->text('deskripsi_solution');
            $table->string("harga_solution", 100);
            $table->enum('status', ['Tersedia', 'Tidak Tersedia', 'Nonaktif'])->default('Tersedia');
            $table->smallInteger("kategori_solution_id")->unsigned();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();

            $table->foreign("kategori_solution_id")->references("id_kategori_solution")->on("kategori_solution")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properti_solution');
    }
};
