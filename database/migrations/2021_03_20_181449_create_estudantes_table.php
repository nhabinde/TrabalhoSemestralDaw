<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstudantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudantes', function (Blueprint $table) {
            $table->id();
            $table->string("nome");
            $table->string("apelido");
            $table->string("sexo");
            $table->string("nacionalidade");
            $table->string("naturalidade");
            $table->string("data_de_nascimento");
            $table->string("morada");
            $table->string("email_pessoal")->nullable();
            $table->string("codigo");
            $table->string("celular");
            $table->string("celular2")->nullable();
            $table->boolean("ativo")->nullable()->default(false);


            $table->timestamps();
//            $table->bigInteger("curso_id")->unsigned();
//            $table->foreign("curso_id")->references("id")->on("cursos")->onDelete("cascade");
            $table->bigInteger("user_id")->unsigned();
            $table->foreign("user_id")->references("id")->on("users")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estudantes');
    }
}
