<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MovimientoArchivoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movimiento_archivo', function (Blueprint $table) {
           $table->increments('mov_arc_id');
            $table->integer('mov_id')->unsigned();
            $table->integer('arc_id')->unsigned();
            $table->softDeletes();
            $table->foreign('mov_id')->references('mov_id')->on('movimiento')->onDelete('cascade');
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
        Schema::drop('movimiento_archivo');
    }
}
