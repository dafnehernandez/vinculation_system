<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlumnoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumno', function (Blueprint $table) {
            $table->increments('id_alumno');
            $table->char('nombre_alumno');
            $table->char('apellidos_alumno');
            $table->char('domicilio_alumno');
            $table->tinyInteger('carrera_alumno');
            $table->tinyInteger('semestre_alumno');
            $table->string('numcontrol_alumno');
            $table->integer('usuario_id')->unsigned();
            $table->softDeletes();
            $table->timestamps();
        });
        
        Schema::table('alumno', function(Blueprint $table){
             $table->foreign('usuario_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alumno');
    }
}
