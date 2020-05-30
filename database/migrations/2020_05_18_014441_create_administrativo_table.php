<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdministrativoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('administrativo', function (Blueprint $table) {
            $table->increments('id_admin');
            $table->char('nombre_admin');
            $table->char('apellidos_admin');
            $table->string('rfc_admin');
            $table->char('puesto_admin');
            $table->integer('usuario_id')->unsigned();
            $table->softDeletes();
            $table->timestamps();
        });
        
        Schema::table('administrativo', function(Blueprint $table){
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
        Schema::dropIfExists('administrativo');
    }
}
