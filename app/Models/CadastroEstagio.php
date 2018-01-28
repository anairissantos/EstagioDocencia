<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CadastroEstagio extends Model
{
    protected $fillable = [
        'Semestre',
        'Matricula',
        'Email',
        'ProfOrient',
        'ProfCoOrientador',
        'DataHora',
        'MatriculaAtiva'
    ];
    protected  $table = 'CadastroEstagio';

    protected $primaryKey = 'Semestre';

    public $incrementing = false;
}
