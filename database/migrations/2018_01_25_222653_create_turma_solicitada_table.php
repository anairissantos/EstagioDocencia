<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTurmaSolicitadaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('TurmaSolicitada', function (Blueprint $table) {
            $table->char('Matricula', 9);
            $table->integer('Prioridade');
            $table->char('CodDisc', 6);
            $table->char('Semestre', 5);
            $table->char('CodTurma', 6);
            $table->timestamps();

            $table->primary(['Matricula', 'Prioridade', 'Semestre']);
            $table->foreign(['CodDisc', 'CodTurma', 'Semestre'])->references(['CodDisc', 'CodTurma', 'Semestre'])->on('Turma')->onDelete('no action');
            $table->foreign(['Matricula', 'Semestre'])->references(['Matricula', 'Semestre'])->on('CadastroEstagio')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('TurmaSolicitada');
    }
}
