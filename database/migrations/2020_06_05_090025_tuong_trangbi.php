<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TuongTrangbi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::dropIfExists('tuong_trangbi');
        Schema::create('tuong_trangbi', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('tuong_id');
            $table->unsignedBigInteger('trangbi_id');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('tuong_id')->references('id')->on('tuong');
            $table->foreign('trangbi_id')->references('id')->on('trangbi');
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
