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
        Schema::create('pesanan_kosta', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kosta_id')->constrained('kosta')->onDelete('cascade');
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade'); // Nama kolom diperbaiki
            $table->string('nama_kostum');
            $table->string('ukuran');
            $table->string('warna');
            $table->integer('jumlah');
            $table->dateTime('waktu_pemakaian_mulai');
            $table->dateTime('waktu_pemakaian_selesai');
            $table->string('image')->nullable(); // Kolom nullable
            $table->double('harga'); // Tidak menambahkan presisi
            $table->enum('status_pesanan', ['pending', 'diproses', 'selesai', 'dibatalkan'])->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pesanan_kosta');
    }
};