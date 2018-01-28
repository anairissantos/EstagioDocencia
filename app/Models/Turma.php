<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Turma extends Model
{
       protected $fillable=[
           'CodDisc',
           'CodTurma',
           'Semestre',
           'CodProf',
           'Horario',
           'TravaAlocacao',
           'TurmaAtiva',

    ];

    protected $table = 'Turma';
    protected $primaryKey = 'CodTurma';
    public $incrementing = false;

}
