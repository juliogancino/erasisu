<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->bigIncrements('id')->unique();
            $table->unsignedInteger('familia_id')->unsigned();
            $table->unsignedInteger('user_id')->unsigned();
            $table->string('nombre')->nullable();
            $table->string('descripcion')->nullable();
            $table->double('precio_c')->nullable()->default(8,3);
            $table->double('precio_v')->nullable()->default(8,3);
            $table->double('existencia')->nullable()->default(8,3);
            $table->string('codigo_p')->nullable()->default(30);
            $table->date('fecha_id')->nullable();
            $table->date('fecha_fd')->nullable();
            $table->foreign('familia_id')->references('id')->on('familias');
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
        Schema::dropIfExists('productos');
    }
}
