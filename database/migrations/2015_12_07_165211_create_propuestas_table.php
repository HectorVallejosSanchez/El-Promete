<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropuestasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('propuestas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('plan_gobierno');
            $table->string('url_propuesta');
            $table->string('descripcion');
            $table->integer('votos_favor');
            $table->integer('votos_contra');
            $table->integer('numero_visitas');
            $table->integer('candidato_id')->unsigned();
            $table->integer('categoria_id')->unsigned();
            $table->foreign('candidato_id')->references('id')->on('candidatos');
            $table->foreign('categoria_id')->references('id')->on('categorias');
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
        Schema::drop('propuestas');
    }
}
