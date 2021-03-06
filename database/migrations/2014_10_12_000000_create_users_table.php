<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            /* campos comunes a toda la bd */
            $table->increments('id');
            $table->timestamps();
            $table->softDeletes();
            
            /* campos propios de la clase auth */
            $table->string('email')->unique();
            $table->string('password'); 
            $table->rememberToken();
            
            /* otros campos */
            $table->string('nombre');
            $table->string('tipo_documento');
            $table->string('pais_documento');
            $table->string('numero_documento');
            $table->enum('tipo_usuario',['Alumno', 'Administrador'])->default('Alumno'); 
            $table->enum('estado',['activo', 'bloqueado','inactivo']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
