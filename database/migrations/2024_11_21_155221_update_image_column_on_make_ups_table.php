<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateImageColumnOnMakeUpsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('make_ups', function (Blueprint $table) {
            $table->string('image')->nullable()->default('default_image.png')->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('make_ups', function (Blueprint $table) {
            $table->string('image')->nullable(false)->default(null)->change();
        });
    }
}