<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Disciplina extends Model
{
    protected $fillable = [
        'Nome',
        'CodArea'
    ];
    protected  $table = 'Disciplinas';
    //
}
