<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCatedraticoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('catedratico', function (Blueprint $table) {
            $table->increments('id_catedratico');
            $table->char('nombre_catedratico');
            $table->char('apellidos_catedratico');
            $table->char('especialidad_catedratico');
            $table->string('rfc_catedratico');
            $table->integer('usuario_id')->unsigned();
            $table->softDeletes();
            $table->timestamps();
        });
        
          Schema::table('catedratico', function(Blueprint $table){
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
        Schema::dropIfExists('catedratico');
    }
}
