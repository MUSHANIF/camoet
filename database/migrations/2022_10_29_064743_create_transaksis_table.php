<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransaksisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('userid');
            $table->unsignedBigInteger('mtrid');
            $table->string('durasi');   
            $table->string('metode_pembayaran');   
            $table->integer('total');   
            $table->integer('kembalian');   
            $table->timestamps();
            $table->foreign('userid')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('mtrid')->references('id')->on('motors')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaksis');
    }
}
