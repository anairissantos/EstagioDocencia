<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Turma extends Model
{
    protected $primaryKey = 'CodTurma';
       protected $fillable = [
        'Horario',
        'TravaAlocacao',
        'TurmaAtiva',
        'semestre'
    ];


    protected  $table = 'Turmas';
}
