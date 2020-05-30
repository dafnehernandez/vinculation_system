<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProyectoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proyecto', function (Blueprint $table) {
            $table->increments('id_proyecto');
            $table->char('nombre_proyecto');
            $table->char('tipo_proyecto');
            $table->integer('numeroparticipantes_proyecto');
            $table->integer('tiempo_proyecto');
            $table->char('requisitos_proyecto');
            $table->char('descripcion_proyecto');
            $table->char('empresa_proyecto');
            $table->integer('repempresa_id')->unsigned();
            $table->softDeletes();
            $table->timestamps();
        });
        
        Schema::table('proyecto', function(Blueprint $table){
             $table->foreign('repempresa_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proyecto');
    }
}
