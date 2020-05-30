<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostulacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('postulacion', function (Blueprint $table) {
            $table->increments('id_postulacion');
            $table->char('folio_postulacion');
            $table->char('tipo_postulacion');
            $table->tinyInteger('estado_postulacion');
            $table->integer('usuario_id')->unsigned();
            $table->integer('proyecto_id')->unsigned();
            $table->softDeletes();
            $table->timestamps();
        });
        
        Schema::table('postulacion', function(Blueprint $table){
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
        Schema::dropIfExists('postulacion');
    }
}
