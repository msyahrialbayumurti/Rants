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
        Schema::create('penyewaan_jasa_taris', function (Blueprint $table) {
            $table->id();
            $table->integer('jumlah_penari');
            $table->string('jenis_tarian');
            $table->string('image');
            $table->string('deskripsi_acara');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penyewaan_jasa_taris');
    }
};
