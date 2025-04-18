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
        Schema::create('make_ups', function (Blueprint $table) {
            $table->id();
            // $table->foreign('jasa_type_id')->references('id')->on('menambahkan_jasa')->onDelete('cascade');
            $table->enum('Kategory', ['SD', 'SMP', 'SMA', 'Umum']); // Enum untuk memilih tipe produk
            $table->string('image');
            $table->double('harga');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('make_ups');
    }
};