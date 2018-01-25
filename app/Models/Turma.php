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

    protected $table = 'turma';
    protected $primaryKey = ['CodTurma','CodDisc','Semestre'];
    public $incrementing = false;

}
