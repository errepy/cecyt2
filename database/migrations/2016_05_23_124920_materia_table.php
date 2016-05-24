<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MateriaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materia', function (Blueprint $table) {
            $table->increments('mat_id');
            $table->integer('car_id')->unsigned();
            $table->string('mat_codigocyt');
            $table->text('mat_descripcion');
            $table->boolean('mat_activa');


            $table->foreign('car_id')->references('car_id')->on('carrera');
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
        Schema::drop('materia');
    }
}
