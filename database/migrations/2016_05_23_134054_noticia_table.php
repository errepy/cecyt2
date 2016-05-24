<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class NoticiaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('noticia', function (Blueprint $table) {
            /*Campos generales*/
            $table->increments('id');
            $table->softDeletes();
            $table->timestamps();

            /*Campos propios de la clase*/
            $table->integer('id')->unsigned();
            $table->foreign('id')->references('id')->on('users');
            $table->string('not_titulo')->unique();
            $table->text('not_contenido');
            $table->dateTime('not_fecha_ultimo_posteo');
            $table->boolean('not_activa');
  
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('noticia');
    }
}
