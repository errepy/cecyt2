<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ActividadArchivoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actividad_archivo', function (Blueprint $table) {
            $table->increments('act_arc_id');
            $table->integer('act_id')->unsigned();
            $table->integer('arc_id')->unsigned();
            $table->softDeletes();
            $table->foreign('act_id')->references('act_id')->on('actividad')->onDelete('cascade');
            $table->foreign('arc_id')->references('arc_id')->on('archivo')->onDelete('cascade');
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
        Schema::drop('actividad_archivo');
    }
}
