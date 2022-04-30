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
        Schema::create('memory', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->integer("brand_id");
            $table->string("type");
            $table->integer("speed");
            $table->string("modules");
            $table->string("color");
            $table->string("latency");
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
        Schema::dropIfExists('memory');
    }
};
