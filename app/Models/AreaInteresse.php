<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AreaInteresse extends Model
{
    protected $fillable = [
        'Matricula',
        'Semestre',
        'Prioridade',
        'CodArea'
    ];
    protected  $table = 'area_interesse';

    protected $primaryKey = 'Prioridade';

    public $incrementing = false;

}
