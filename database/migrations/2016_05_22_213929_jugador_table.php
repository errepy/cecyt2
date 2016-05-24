<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class JugadorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jugador', function (Blueprint $table) {
            $table->increments('jug_id');
            $table->integer('usu_id')->unsigned();
            $table->string('jug_nomnre', 60);
            $table->boolean('jug_activo');
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
        Schema::drop('jugador');
    }
}
