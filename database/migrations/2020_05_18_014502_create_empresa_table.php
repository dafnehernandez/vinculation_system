<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpresaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresa', function (Blueprint $table) {
            $table->increments('id_empresa');
            $table->char('nombre_empresa');
            $table->char('domicilio_empresa');
            $table->char('giro_empresa');
            $table->string('rfc_empresa');
            $table->integer('usuario_id')->unsigned();
            $table->softDeletes();
            $table->timestamps();
        });
        
        Schema::table('empresa', function(Blueprint $table){
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
        Schema::dropIfExists('empresa');
    }
}
