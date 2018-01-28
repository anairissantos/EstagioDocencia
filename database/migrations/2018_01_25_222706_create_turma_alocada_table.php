<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTurmaAlocadaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('TurmaAlocada', function (Blueprint $table) {
            $table->char('Semestre', 5);
            $table->integer('Rodada');
            $table->char('Matricula', 9);
            $table->char('CodDisc', 6);
            $table->char('CodTurma', 6);
            $table->timestamps();

            $table->primary(['Semestre', 'Rodada', 'Matricula', 'CodDisc', 'CodTurma']);

            $table->foreign(['Matricula', 'Semestre'])->references(['Matricula', 'Semestre'])->on('CadastroEstagio')->onDelete('no action');
            $table->foreign(['CodDisc', 'CodTurma', 'Semestre'])->references(['CodDisc', 'CodTurma', 'Semestre'])->on('Turma')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('TurmaAlocada');
    }
}
