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
        Schema::create('jadwal_ibadahs', function (Blueprint $table) {
            $table->id();

            $table->string('tempat_ibadah');
            $table->string('petugas_ibadah');
            $table->string('pelayan_firman');
            $table->string('doa_syafaat');
            $table->string('doa_syukur');
            $table->mediumText('keterangan')->nullable();

            $table->timestamp('published_at')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jadwal_ibadahs');
    }
};
