<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProblematicaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('problematica', function (Blueprint $table) {
            $table->increments('pro_id');
            $table->integer('usu_id')->unsigned();
            $table->string('pro_titulo');
            $table->string('pro_contenido');
            $table->date('dis_fecha');
            $table->boolean('dis_activa');

            $table->foreign('usu_id')->references('usu_id')->on('users');
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('problematica_archivo', function (Blueprint $table) {
            $table->increments('pro_arch_id');
            $table->integer('pro_id')->unsigned();

            $table->foreign('pro_id')->references('pro_id')->on('problematica');

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
        Schema::drop('problematica');
    }
}
