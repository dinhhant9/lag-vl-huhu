<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDoiHinhChuanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doi_hinh_chuan', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('name_ch');
            $table->integer('set');
            $table->integer('tier');
            $table->boolean('tier_up');
            $table->boolean('tier_down');
            $table->string('traits');
            $table->string('synergy');
            $table->string('characters');
            $table->string('components');
            $table->string('mid');
            $table->string('replacements');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('doi_hinh_chuan');
    }
}
