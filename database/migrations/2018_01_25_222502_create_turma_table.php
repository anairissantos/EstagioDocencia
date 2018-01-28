<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTurmaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Turma', function (Blueprint $table) {
            $table->char('CodDisc', 6);
            $table->char('CodTurma', 6);
            $table->char('Semestre', 5);
            $table->unsignedInteger('CodProf');
            $table->string('Horario',80);
            $table->boolean('TravaAlocacao')->default(false);
            $table->boolean('TurmaAtiva')->default(true);
            $table->timestamps();

            $table->primary(['CodDisc', 'CodTurma', 'Semestre']);
            $table->foreign('CodProf')->references('CodProf')->on('Professor')->onDelete('no action');
            $table->foreign('CodDisc')->references('CodDisc')->on('Disciplina')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Turma');
    }
}
