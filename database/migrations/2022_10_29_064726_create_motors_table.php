<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMotorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('motors', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('jnsid');
            $table->string('name');
            $table->string('harga');
            $table->string('stok');
            $table->string('plat_nomor');
            $table->string('image');
            $table->string('deskripsi');
            $table->timestamps();
            $table->foreign('jnsid')->references('id')->on('jnsmotors')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('motors');
    }
}
