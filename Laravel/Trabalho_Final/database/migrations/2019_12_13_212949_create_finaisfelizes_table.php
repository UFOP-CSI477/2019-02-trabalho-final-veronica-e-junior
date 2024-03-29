
<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFinaisFelizesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('finaisfelissszes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('descricao');
            $table->integer('adocao_id')->unsignid();
            $table->foreign('adocao_id')->references('id')->on('adotars');
            $table->integer('user_id')->unsignid();
            $table->foreign('user_id')->references('id')->on('users');
            $table->integer('animal_id')->unsignid();
            $table->foreign('animal_id')->references('id')->on('animals');
            $table->String('imagem');
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
        Schema::dropIfExists('finais__felizes');
    }
}
