<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Noticias extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Noticias', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->string('titulo');
            $table->string('cuerpo',5000); 
            $table->string('avatar')->default('default.png');
            $table->rememberToken();
            $table->timestamps();
            $table->datetime('fecha');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExist('Noticias');

    }
}
