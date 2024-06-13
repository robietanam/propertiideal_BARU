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
        Schema::create('partner', function (Blueprint $table) {
            $table->increments('id_partner');
            $table->string('no_telepon', 15);
            $table->text('detail_alamat')->nullable();
            $table->text('link_instagram');
            $table->text('link_website');
            $table->string('foto_ktp');
            $table->bigInteger('user_id')->unsigned();
            $table->enum('status', ['Belum Verifikasi', 'Sudah Verifikasi', 'Nonaktif'])->default('Belum Verifikasi');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('partner');
    }
};
