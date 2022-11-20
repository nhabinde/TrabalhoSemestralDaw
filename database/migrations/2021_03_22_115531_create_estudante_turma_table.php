<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstudanteTurmaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudante_turma', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->bigInteger("turma_id")->unsigned();
            $table->foreign("turma_id")->references("id")->on("turmas")->onDelete("cascade");
            $table->bigInteger("estudante_id")->unsigned();
            $table->foreign("estudante_id")->references("id")->on("estudantes")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estudante_turma');
    }
}
