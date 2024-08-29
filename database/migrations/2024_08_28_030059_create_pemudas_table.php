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
        Schema::create('pemudas', function (Blueprint $table) {
            $table->id();

            $table->string('nama_depan');
            $table->string('nama_tengah')->nullable();
            $table->string('nama_belakang')->nullable();
            $table->string('jenis_kelamin_id')->nullable();
            $table->string('tempat_tanggal_lahir')->nullable();
            $table->string('nomor_hp')->nullable();
            $table->string('usia')->nullable();
            $table->string('alamat')->nullable();
            $table->string('foto')->nullable();

            // relation with : wilayah, gereja
            $table->bigInteger('gereja_id')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pemudas');
    }
};
