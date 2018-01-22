<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    protected $fillable = [
        'Nome',
        'Nivel'
    ];
    protected  $table = 'Alunos';

 }
