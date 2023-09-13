<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProvedorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('provedors', function (Blueprint $table) {
            $table->bigIncrements('id')->unique();
            $table->unsignedInteger('user_id')->unsigned();
            $table->string('ruc')->nullable()->default(14);
            $table->string('nombre')->nullable();
            $table->string('telefono')->nullable()->default(11);
            $table->string('celular')->nullable()->default(11);
            $table->string('correo')->nullable();
            $table->string('direccion')->nullable();
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
        Schema::dropIfExists('provedors');
    }
}
