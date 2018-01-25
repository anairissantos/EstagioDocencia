<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriaTabelaTurma extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('turma', function (Blueprint $table) {
            $table->string('CodTurma')->primary();
            $table->integer('Semestre')->primary();
            $table->unsignedInteger('professor_CodProf')->nullable();
            $table->foreign('professor_CodProf')->references('CodProf')->on('professor')->onDelete('set null');
            $table->string('Horario');
            $table->boolean('TravaAlocacao');
            $table->boolean('TurmaAtiva');
            $table->integer('CodDis')->unsigned();
            $table->primary(['CodDis']);
            $table->foreign('disciplina_CodDis')->references('CodDisc')->on('disciplina')->onDelete('set null');


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
        Schema::dropIfExists('turma');
    }
}
