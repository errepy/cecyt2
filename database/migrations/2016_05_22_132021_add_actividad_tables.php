<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddActividadTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actividad', function (Blueprint $table) {
            $table->increments('act_id');
            $table->text('act_descripcion');
            $table->text('act_detalle');
            $table->time('act_FechaInicio');
            $table->time('act_FechaFin');
            $table->boolean('act_activa');
            $table->integer('usu_id')->unsigned();
            $table->foreign('usu_id')->references('usu_id')->on('users')->onDelete('cascade');
             $table->softDeletes();
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
        Schema::drop('actividad');
    }
}
