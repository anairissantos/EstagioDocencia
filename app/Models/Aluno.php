<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    protected $fillable = [
        'Nome',
        'Nivel',
        'Matricula'

    ];
    protected  $table = 'aluno';

    protected $primaryKey = 'Matricula';

    public $incrementing = false;

 }
