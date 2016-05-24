<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DiscusionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('discusion', function (Blueprint $table) {
                 $table->increments('dis_id');
            $table->integer('usu_id')->unsigned();
            $table->foreign('usu_id')->references('usu_id')->on('users');
            $table->string('titulo')->unique();
            $table->text('cuerpo');
            $table->string('slug')->unique();
            $table->boolean('active');

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
        Schema::drop('discusion');
    }
}
