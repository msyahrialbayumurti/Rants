<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('kelola_produks', function (Blueprint $table) {
            // Cegah duplikasi kolom
            if (!Schema::hasColumn('kelola_produks', 'produk_tipe')) {
                $table->string('produk_tipe')->nullable();
            }
        });
    }

    public function down()
    {
        Schema::table('kelola_produks', function (Blueprint $table) {
            // Hapus kolom jika rollback
            if (Schema::hasColumn('kelola_produks', 'produk_tipe')) {
                $table->dropColumn('produk_tipe');
            }
        });
    }


};
