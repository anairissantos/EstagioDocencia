<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
    protected $fillable = [
        'CodProf',
        'Nome'
    ];
    protected  $table = 'Professor';

}
