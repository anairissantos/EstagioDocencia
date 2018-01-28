<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    protected $fillable = [
        'Matricula',
        'Nome',
        'Nivel'

    ];
    protected  $table = 'Aluno';

    protected $primaryKey = 'Matricula';

    public $incrementing = false;

 }
