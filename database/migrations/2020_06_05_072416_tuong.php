<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Tuong extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('tuong', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->string('name_vi')->nullable();
            $table->longText('set')->nullable();
            $table->string('tier')->nullable();
            $table->boolean('tier_up')->nullable();
            $table->boolean('active')->nullable();
            $table->boolean('tier_down')->nullable();
            $table->boolean('soon')->nullable();
            $table->boolean('new')->nullable();
            $table->boolean('updated')->nullable();
            $table->boolean('popular')->nullable();
            $table->boolean('buff')->nullable();
            $table->boolean('nerf')->nullable();
            $table->string('cost')->nullable();
            $table->longText('health')->nullable();
            $table->longText('armor')->nullable();
            $table->longText('resistance')->nullable();
            $table->longText('mana_start')->nullable();
            $table->longText('mana_cost')->nullable();
            $table->longText('attack')->nullable();
            $table->string('speed')->nullable();
            $table->string('dps')->nullable();
            $table->string('range')->nullable();
            $table->string('range_sm')->nullable();
            $table->longText('skill')->nullable();
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
        Schema::dropIfExists('tuong');
    }
}
