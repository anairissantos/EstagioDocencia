<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Disciplina extends Model
{
    protected $fillable = [
        'CodDisc',
        'CodArea',
        'Nome'

    ];
    protected $table = 'Disciplina';

    protected $primaryKey = 'CodDisc';

    public $incrementing = false;
}
