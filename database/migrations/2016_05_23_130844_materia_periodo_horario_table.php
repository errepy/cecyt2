<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MateriaPeriodoHorarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materia_periodo_horario', function (Blueprint $table) {
            $table->increments('mat_per_hor_id');
            $table->integer('mat_per_id')->unsigned();
            $table->integer('mat_per_hor_dia_semana');
            $table->time('mat_per_hor_hora_inicio');
            $table->time('mat_per_hor_hora_fin');
            $table->string('mat_per_hor_aula');
            $table->foreign('mat_per_id')->references('mat_per_id')->on('materia_periodo'); 
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
        Schema::drop('materia_periodo_horario');
    }
}
