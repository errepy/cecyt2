<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ComentarioNoticiaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comentario_noticia', function (Blueprint $table) {
           
            /*Campos Generales*/
            $table->increments('id');
            $table->softDeletes();
            $table->timestamps();


            /*Valores propios de la clase*/
            $table->integer('not_id')->unsigned();
            $table->foreign('not_id')->references('id')->on('noticia');
            $table ->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->text('contenido');
            $table->boolean('activo');

        });



        Schema::create('noticia_archivo', function (Blueprint $table) {
            $table->increments('n_a_id');
            $table->integer('not_id')->unsigned();
            $table->integer('arc_id')->unsigned();
            $table->softDeletes();
            $table->foreign('not_id')->references('not_id')->on('noticia');
            $table->foreign('arc_id')->references('arc_id')->on('archivo');

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
        Schema::drop('comentario_noticia');
        Schema::drop('noticia_archivo');
    }
}
