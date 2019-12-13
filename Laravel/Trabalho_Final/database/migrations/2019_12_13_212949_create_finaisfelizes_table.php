class Finaisfelizes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('finaisfelizes', function (Blueprint $table) {
            $table->string('descricao');
            $table->string('imagem');
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
          Schema::dropIfExists('finaisfelizes');
    }
}
