<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TuongToc extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::dropIfExists('tuong_toc');
        Schema::create('tuong_toc', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('tuong_id');
            $table->unsignedBigInteger('toc_id');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('tuong_id')->references('id')->on('tuong');
            $table->foreign('toc_id')->references('id')->on('toc');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

    }
}
