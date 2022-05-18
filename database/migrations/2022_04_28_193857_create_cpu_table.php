<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cpu', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->unsignedBigInteger("brand_id")->index()->nullable();
            $table->foreign('brand_id')->references('id')->on('brand');
            $table->double("clock");
            $table->integer("cores");
            $table->integer("tdp");
            $table->unsignedBigInteger("socket_id")->index()->nullable();
            $table->foreign('socket_id')->references('id')->on('socket');
            $table->string("i_gpu");
            $table->boolean("smt_or_ht");
            $table->integer("rating");
            $table->integer("price");
            $table->text("info");
            $table->unsignedBigInteger("illustration_image_id")->index()->nullable();
            $table->foreign('illustration_image_id')->references('id')->on('illustrationimage');
            $table->unsignedBigInteger("supported_ram_type_id")->index()->nullable();
            $table->foreign('supported_ram_type_id')->references('id')->on('supportedramtype');
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
        Schema::dropIfExists('cpu');
    }
};
