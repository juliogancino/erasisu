<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCabecerasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cabeceras', function (Blueprint $table) {
            $table->bigIncrements('id')->unique();
            $table->unsignedInteger('provedor_id')->unsigned();
            $table->unsignedInteger('user_id')->unsigned();
            $table->string('nombre')->nullable();
            $table->double('subtotal')->nullable()->default(8,3);
            $table->double('iva_12')->nullable()->default(8,3);
            $table->double('iva_0')->nullable()->default(8,3);
            $table->date('fecha')->nullable();
            $table->boolean('atorizacion')->nullable()->default(false);
            $table->double('ice')->nullable()->default(8,3);
            $table->foreign('provedor_id')->references('id')->on('provedors');
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('cabeceras');
    }
}
