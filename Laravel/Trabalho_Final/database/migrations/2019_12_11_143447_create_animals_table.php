<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnimalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animals', function (Blueprint $table) {
            $table->increments('id');
             $table->integer('user_dono_id')->unsignid();
            $table->foreign('user_dono_id')->references('id')->on('users');
            $table->VARCHAR('especie');
            $table->VARCHAR('cep');
            $table->VARCHAR('status');
            $table->VARCHAR('nome');
            $table->VARCHAR('descricao');
            $table->VARCHAR('endereco');
            $table->VARCHAR('cep');
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
        Schema::dropIfExists('animals');
    }
}
