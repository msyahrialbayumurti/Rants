<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKelolaProduksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kelola_produks', function (Blueprint $table) {
            $table->id();
            $table->string('produk_tipe'); // makeup, kostum, atau jasa_tari
            $table->unsignedBigInteger('produk_id'); // Relasi ke tabel produk terkait
            $table->timestamps();

            $table->foreign('produk_id')->references('id')->on('make_ups')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kelola_produks');
    }
}