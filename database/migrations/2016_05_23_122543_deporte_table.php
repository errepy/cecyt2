<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DeporteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deporte', function (Blueprint $table) {
            $table->increments('dep_id');
            $table->integer('par_id')->unsigned();
            $table->text('dep_descripcion');
            $table->boolean('dep_activo');
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
        Schema::drop('deporte');
    }
}
