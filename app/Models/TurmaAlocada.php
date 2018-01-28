<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TurmaAlocada extends Model
{
    protected $fillable=[
       'Semestre',
        'Rodada',
        'Matricula',
        'CodDisc',
        'CodTurma'

    ];

    protected $table = 'TurmaAlocada';

    protected $primaryKey = 'Rodada';

    public $incrementing = false;
}
