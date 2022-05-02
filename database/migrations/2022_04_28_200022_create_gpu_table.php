<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gpu', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->integer("brand_id");
            $table->string("chipset");
            $table->integer("memory");
            $table->integer("core_clock");
            $table->integer("boost_clock");
            $table->string("color");
            $table->integer("length");
            $table->integer("rating");
            $table->integer("price");
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
        Schema::dropIfExists('gpu');
    }
};