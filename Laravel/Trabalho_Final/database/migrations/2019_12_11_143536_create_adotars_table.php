<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdotarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adotars', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_dono_id')->unsignid();
            $table->foreign('user_dono_id')->references('user_dono_id')->on('animals');
            $table->integer('user_pedinte_id')->unsignid();
            $table->foreign('user_pedinte_id')->references('id')->on('users');
            $table->integer('animal_id')->unsignid();
            $table->foreign('animal_id')->references('id')->on('animals');
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
        Schema::dropIfExists('adotars');
    }
}
