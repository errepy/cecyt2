<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PartidoTantoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partido_tanto', function (Blueprint $table) {
            $table->increments('par_tan_id');
            $table->integer('par_id')->unsigned();
            $table->integer('equ_id')->unsigned();
            $table->integer('par_tan_valor');
            $table->text('part_tan_detalle');
            $table->boolean('par_tan_activo');
            $table->foreign('par_id')->references('par_id')->on('partido');
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
        Schema::drop('partido_tanto');
    }
}
