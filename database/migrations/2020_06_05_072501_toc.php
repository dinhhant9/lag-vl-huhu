<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Toc extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('toc', function (Blueprint $table) {
            $table->bigIncrements('id')->nullable();
            $table->text('name')->nullable();
            $table->text('name_vi')->nullable();
            $table->longText('set')->nullable();
            $table->string('tier')->nullable();
            $table->boolean('tier_up')->nullable();
            $table->boolean('tier_down')->nullable();
            $table->longText('effect')->nullable();
            $table->longText('effect_vi')->nullable();
            $table->longText('bonus')->nullable();
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
        Schema::dropIfExists('toc');
    }
}
