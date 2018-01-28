<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCadastroEstagioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('CadastroEstagio', function (Blueprint $table) {
            $table->char('Semestre', 5);
            $table->char('Matricula', 9);
            $table->string('Email',100);
            $table->unsignedInteger('ProfOrient');
            $table->unsignedInteger('ProfCoOrientador')->nullable();
            $table->dateTime('DataHora');
            $table->boolean('MatriculaAtiva')->default(true);
            $table->timestamps();

            $table->primary(['Semestre', 'Matricula']);
            $table->foreign('Matricula')->references('Matricula')->on('Aluno')->onDelete('no action');
            $table->foreign('ProfOrient')->references('CodProf')->on('Professor')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('CadastroEstagio');
    }
}
