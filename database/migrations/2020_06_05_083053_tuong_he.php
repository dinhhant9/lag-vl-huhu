<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TuongHe extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::dropIfExists('tuong_he');
        Schema::create('tuong_he', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('tuong_id');
            $table->unsignedBigInteger('he_id');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('tuong_id')->references('id')->on('tuong');
            $table->foreign('he_id')->references('id')->on('he');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
