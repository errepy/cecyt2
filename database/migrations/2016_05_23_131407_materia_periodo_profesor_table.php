<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MateriaPeriodoProfesorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materia_periodo_profesor', function (Blueprint $table) {
            $table->increments('mat_per_pro_id');
            $table->integer('mat_per_id')->unsigned();
            $table->foreign('mat_per_id')->references('mat_per_id')->on('materia_periodo'); 
            $table->string('mat_per_pro_profesor');
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
        Schema::drop('materia_periodo_profesor');
    }
}
