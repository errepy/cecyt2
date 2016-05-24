<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EquipoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipo', function (Blueprint $table) {
            $table->increments('equ_id');
            $table->integer('dep_id')->unsigned();
            $table->foreign('dep_id')->references('dep_id')->on('deporte');
            $table->string('equ_nombre');
            $table->boolean('equ_activo');
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
        Schema::drop('equipo');
    }
}
