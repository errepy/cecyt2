<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ComentarioDiscusionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
           
            
           Schema::create('comentario_discusion', function (Blueprint $table) {
            
               /*campos generales*/
            $table->softDeletes();
            $table->timestamps();
            $table->increments('id'); 
            
            /*campos propios de la clase*/
            $table->integer('dis_id')->unsigned();
            $table->foreign('dis_id')->references('id')->on('discusion');
            $table->integer('usu_id')->unsigned();
            $table->foreign('usu_id')->references('id')->on('users');
            
            $table->text('contenido');
            $table->boolean('activo');
            
        });



        Schema::create('discusion_archivo', function (Blueprint $table) {
            $table->increments('d_a_id');
            $table->integer('dis_id')->unsigned();
            $table->integer('arc_id')->unsigned();
            $table->softDeletes();
            $table->foreign('dis_id')->references('dis_id')->on('discusion');
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
        Schema::drop('comentario_discusion');
        Schema::drop('discusion_archivo');
    }
}
