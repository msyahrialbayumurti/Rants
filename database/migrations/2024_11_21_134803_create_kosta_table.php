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
        Schema::create('kosta', function (Blueprint $table) {
            $table->id();
            $table->string('ukuran');
            $table->string('warna');
            $table->integer('jumlah');
            $table->string('image');
            $table->double('harga');
            $table->string('nama_kostum');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kosta');
    }
};
