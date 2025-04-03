<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contenido extends Model
{
    //
    protected $table = 'contenidos';

    protected $fillable = [
        'nombre',   
        'categoria', 
        'archivo', 
        'contador',
    ];
}
