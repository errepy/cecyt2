<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MovimientoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movimiento', function (Blueprint $table) {
            $table->increments('mov_id');
            $table->integer('act_id')->unsigned();
            $table->integer('usu_id')->unsigned();
            $table->boolean('mov_ingreso');
            $table->boolean('mov_egreso');
            $table->date('fecha');
            $table->text('descripcion');
            $table->integer('monto');
            $table->boolean('activo');
            $table->softDeletes();

            $table->foreign('act_id')->references('act_id')->on('actividad')->onDelete('cascade');
            $table->foreign('usu_id')->references('usu_id')->on('users')->onDelete('cascade');


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
        Schema::drop('movimiento');
    }
}
