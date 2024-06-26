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
        Schema::create('foto_properti', function (Blueprint $table) {
            $table->increments('id_foto_properti');
            $table->text('deskripsi_foto')->nullable();
            $table->smallInteger('jenis_foto_id')->unsigned();
            $table->integer('properti_id')->unsigned();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();

            $table->foreign('jenis_foto_id')->references('id_jenis_foto')->on('jenis_foto')->onDelete('cascade');
            $table->foreign('properti_id')->references('id_properti')->on('properti')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('foto_properti');
    }
};
