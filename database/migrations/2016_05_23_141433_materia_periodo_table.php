<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MateriaPeriodoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materia_periodo', function (Blueprint $table) {
              $table->increments('mat_per_id');
            $table->integer('mat_id')->unsigned();
            $table->integer('per_id')->unsigned();
            $table->boolean('mat_per_activo');           

            $table->foreign('per_id')->references('per_id')->on('periodo');           

            $table->foreign('mat_id')->references('mat_id')->on('materia');
            $table->softDeletes();
            $table->timestamps();        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('materia_periodo');
    }
}
