<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDisciplinaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Disciplina', function (Blueprint $table) {
            $table->char('CodDisc', 6)->primary();
            $table->unsignedInteger('CodArea');
            $table->foreign('CodArea')->references('CodArea')->on('Area')->onDelete('no action');
            $table->string('NomeDisc',80);
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
        Schema::dropIfExists('Disciplina');
    }
}
