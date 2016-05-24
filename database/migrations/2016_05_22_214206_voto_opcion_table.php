<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class VotoOpcionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('voto_opcion', function (Blueprint $table) {
            $table->increments('vot_op_id');
            $table->integer('voto_id')->unsigned();
            $table->text('vot_op_des');
            $table->text('vot_op_valor');

            $table->softDeletes();
            $table->foreign('voto_id')->references('voto_id')->on('voto');

            $table->timestamps();
        });


        Schema::create('voto_opcion_usuario', function (Blueprint $table) {
            $table->increments('vot_op_usu_id');
            $table->integer('usu_id')->unsigned();
            $table->foreign('usu_id')->references('usu_id')->on('users');
            //
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('voto_opcion');
        Schema::drop('voto_opcion_usuario');
    }
}
