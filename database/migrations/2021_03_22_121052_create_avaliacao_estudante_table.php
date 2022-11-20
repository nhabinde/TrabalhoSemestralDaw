<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAvaliacaoEstudanteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('avaliacao_estudante', function (Blueprint $table) {
            $table->id();
            $table->double("nota");
            $table->timestamps();

            $table->bigInteger("estudante_id")->unsigned();
            $table->foreign("estudante_id")->references("id")->on("estudantes")->onDelete("cascade");

            $table->bigInteger("avaliacao_id")->unsigned();
            $table->foreign("avaliacao_id")->references("id")->on("avaliacaos")->onDelete("cascade");

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('avaliacao_estudantes');
    }
}
