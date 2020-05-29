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
            $table->longText('set');
            $table->integer('tier');
            $table->boolean('tier_up');
            $table->boolean('tier_down');
            $table->longText('traits');
            $table->longText('synergy');
            $table->longText('characters');
            $table->longText('components');
            $table->longText('mid');
            $table->longText('replacements');
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
