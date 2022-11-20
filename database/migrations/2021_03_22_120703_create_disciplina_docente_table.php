<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDisciplinaDocenteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('disciplina_docente', function (Blueprint $table) {
            $table->id();
            $table->timestamps();


            $table->bigInteger("docente_id")->unsigned();
            $table->foreign("docente_id")->references("id")->on("docentes")->onDelete("cascade");

            $table->bigInteger("disciplina_id")->unsigned();
            $table->foreign("disciplina_id")->references("id")->on("disciplinas")->onDelete("cascade");

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('disciplina_docentes');
    }
}
