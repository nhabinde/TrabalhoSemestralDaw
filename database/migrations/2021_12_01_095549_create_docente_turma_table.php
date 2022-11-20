<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocenteTurmaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('docente_turma', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->bigInteger("docente_id")->unsigned();
            $table->foreign("docente_id")->references("id")->on("docentes")->onDelete("cascade");

            $table->bigInteger("turma_id")->unsigned();
            $table->foreign("turma_id")->references("id")->on("turmas")->onDelete("cascade");

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('docente_turmas');
    }
}
