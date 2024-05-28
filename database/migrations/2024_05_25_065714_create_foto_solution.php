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
        Schema::create('foto_solution', function (Blueprint $table) {
            $table->increments("id_foto_solution");
            $table->string("foto_solution", 100);
            $table->text("deskripsi_foto");
            $table->smallInteger('jenis_foto_id')->unsigned();
            $table->integer('properti_id')->unsigned();
            $table->timestamps();

            $table->foreign('jenis_foto_id')->references('id_jenis_foto')->on('jenis_foto')->onDelete('cascade');
            $table->foreign('properti_id')->references('id_properti')->on('properti')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('foto_solution');
    }
};
