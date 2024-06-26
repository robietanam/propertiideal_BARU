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
        Schema::create('properti_rumah', function (Blueprint $table) {
            $table->increments('id_properti_rumah');
            $table->string('slug');
            $table->string('luas_tanah', 30);
            $table->string('luas_bangunan', 30);
            $table->smallInteger('jumlah_garasi');
            $table->smallInteger('jumlah_kamar_tidur');
            $table->smallInteger('jumlah_kamar_mandi');
            $table->integer('properti_id')->unsigned();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();

            $table->foreign('properti_id')->references('id_properti')->on('properti')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properti_rumah');
    }
};
