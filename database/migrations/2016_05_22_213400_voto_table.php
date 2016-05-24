<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class VotoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('voto', function (Blueprint $table) {
            $table->increments('voto_id');
            $table->integer('usu_id')->unsigned();
            $table->text('dis_titulo');
            $table->text('dis_contenido');
            $table->date('dis_fecha_inicio');
            $table->date('dis_fecha_fin');
            $table->boolean('dis_activo');

            $table->softDeletes();


            $table->foreign('usu_id')->references('usu_id')->on('users');
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
        Schema::drop('voto');
    }
}
