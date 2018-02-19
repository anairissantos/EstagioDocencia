<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    protected $fillable = [
        'CodArea',
        'Nome'
    ];
    protected  $table = 'area';
    protected $primaryKey = 'CodArea';
}




