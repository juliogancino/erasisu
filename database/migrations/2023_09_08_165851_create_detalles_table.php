<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetallesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalles', function (Blueprint $table) {
            $table->bigIncrements('id')->unique();
            $table->unsignedInteger('user_id')->unsigned();
            $table->unsignedInteger('cabecera_id')->unsigned();
            $table->unsignedInteger('producto_id')->unsigned();
            $table->double('total')->nullable()->default(8,3);
            $table->double('descuento')->nullable()->default(8,3);
            $table->foreign('cabecera_id')->references('id')->on('cabeceras');
            $table->foreign('producto_id')->references('id')->on('productos');
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
        Schema::dropIfExists('detalles');
    }
}
