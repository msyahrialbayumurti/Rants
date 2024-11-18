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
        Schema::create('pesanan_penyewaan_jasa_taris', function (Blueprint $table) {
            $table->id();
            $table->foreignId('penyewaan_jasa_taris_id')->constrained('penyewaan_jasa_taris')->onDelete('cascade');
            $table->foreignId('Users_id')->constrained('Users')->onDelete('cascade');
            $table->integer('jumlah_penari');
            $table->date('tanggal');
            $table->string('jenis_tarian');
            $table->integer('jam_pemakaian');
            $table->string('deskripsi_acara');
            $table->string('lokasi'); // Nama lokasi
            $table->decimal('latitude', 10, 8); // Latitude
            $table->decimal('longitude', 11, 8); // Longitude            $table->integer('harga');
            $table->enum('status_pesanan', allowed: ['pending', 'diproses', 'selesai', 'dibatalkan'])->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pesanan_penyewaan_jasa_taris');

    }
};
