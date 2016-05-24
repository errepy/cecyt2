<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PartidoEquipoEquipoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partido_equipo_equipo', function (Blueprint $table) {
            $table->increments('par_equ_equ_id');
             $table->integer('equ_id')->unsigned();
             $table->foreign('equ_id')->references('equ_id')->on('equipo');
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
        Schema::drop('partido_equipo_equipo');
    }
}
