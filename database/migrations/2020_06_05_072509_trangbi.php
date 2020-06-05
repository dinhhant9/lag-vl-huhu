<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Trangbi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('trangbi', function (Blueprint $table) {
            $table->bigIncrements('id')->nullable();
            $table->text('name')->nullable();
            $table->text('name_vi')->nullable();
            $table->longText('set')->nullable();
            $table->string('tier')->nullable();
            $table->boolean('tier_up')->nullable();
            $table->boolean('tier_down')->nullable();
            $table->longText('bonus')->nullable();
            $table->longText('bonus_vi')->nullable();
            $table->longText('into')->nullable();
            $table->longText('stats')->nullable();
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
        //
        Schema::dropIfExists('trangbi');
    }
}
