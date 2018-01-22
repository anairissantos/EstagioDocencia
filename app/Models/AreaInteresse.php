<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AreaInteresse extends Model
{
    protected $fillable = [
        'Prioridade',
    ];
    protected  $table = 'AreasInteresse';

}
