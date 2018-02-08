<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TurmaSolicitada extends Model
{
    protected $fillable = [
        'Matricula',
        'Prioridade',
        'CodDisc',
        'Semestre',
        'CodTurma'
    ];

    protected $table = 'turma_solicitada';

    protected $primaryKey = 'Prioridade';

    public $incrementing = false;



}
