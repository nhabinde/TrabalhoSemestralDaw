<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTurmasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('turmas', function (Blueprint $table) {
            $table->id();
            $table->integer("ano");
            $table->boolean("ativa")->nullable()->default(false);
            $table->string("descricao");
            $table->timestamps();

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
        Schema::dropIfExists('turmas');
    }
}
