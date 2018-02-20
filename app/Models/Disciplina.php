<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Disciplina extends Model
{
    protected $fillable = [
        'CodDisc',
        'CodArea',
        'NomeDisc'

    ];
    protected $table = 'disciplina';

    protected $primaryKey = 'CodDisc';

    public $incrementing = false;
}
