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
            $table->string('especie');
            $table->string('sexo');
          //  $table->VARCHAR('status');
<<<<<<< HEAD
            $table->string('nome');
            $table->string('descricao');
            $table->string('cidade');
            $table->string('estado');
            $table->string('cep');
=======
            $table->string('imagem');
            $table->VARCHAR('nome');
            $table->VARCHAR('descricao');
            $table->VARCHAR('cidade');
            $table->VARCHAR('estado');
            $table->VARCHAR('cep');
>>>>>>> 142f5dba2d6cc7060c8a1c4d6791dcf342973dfd
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
