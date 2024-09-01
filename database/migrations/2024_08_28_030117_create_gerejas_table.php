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
        Schema::create('gerejas', function (Blueprint $table) {
            $table->id();

            $table->string('nama_gereja');
            $table->string('wilayah_id')->nullable();
            $table->string('alamat')->nullable();
            $table->mediumText('keterangan')->nullable();

            // $table->string('nama_pengguna')->nullable();
            // $table->string('kata_sandi')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gerejas');
    }
};
