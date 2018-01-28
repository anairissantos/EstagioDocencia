<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAreaInteresseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('AreaInteresse', function (Blueprint $table) {
            $table->char('Matricula', 9);
            $table->char('Semestre', 5);
            $table->integer('Prioridade');
            $table->unsignedInteger('CodArea');
            $table->timestamps();

            $table->primary(['Matricula', 'Semestre', 'Prioridade']);
            $table->foreign('Matricula')->references('Matricula')->on('CadastroEstagio')->onDelete('no action');
            $table->foreign('CodArea')->references('CodArea')->on('Area')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('AreaInteresse');
    }
}
