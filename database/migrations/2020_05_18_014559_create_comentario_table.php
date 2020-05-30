<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComentarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comentario', function (Blueprint $table) {
            $table->increments('id_comentario');
            $table->char('comentario');
            $table->integer('usuario_id')->unsigned();
            $table->integer('proyecto_id')->unsigned();
        });
        
        Schema::table('comentario', function(Blueprint $table){
             $table->foreign('usuario_id')->references('id')->on('users')->onDelete('cascade');
             $table->foreign('proyecto_id')->references('id_proyecto')->on('proyecto')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comentario');
    }
}
