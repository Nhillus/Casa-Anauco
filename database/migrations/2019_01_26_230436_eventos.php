<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Eventos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eventos', function (Blueprint $table) {
        $table->increments('id')->unique();
        $table->string('nombre');
        $table->string('descripcion');
        $table->string('avatar')->default('default.png');
        $table->datetime('fecha_publicacion');
        $table->string('invitados_especiales');
        $table->string('patrocinantes');
        $table->datetime('fecha_evento');

    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('eventos');

    }
}
