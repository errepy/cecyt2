<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PartidoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partido', function (Blueprint $table) {
            $table->increments('par_id');
            $table->date('par_fecha');
            $table->string('par_lugar');
            $table->boolean('par_activo');
            $table->softDeletes();

            $table->timestamps();
        });

        Schema::create('partido_equipo', function (Blueprint $table) {
            $table->increments('par_equ_id');
            $table->integer('par_id')->unsigned();
            $table->foreign('par_id')->references('par_id')->on('partido');
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
        Schema::drop('partido');
    }
}
