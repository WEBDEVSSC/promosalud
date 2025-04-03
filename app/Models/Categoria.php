<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    //
    protected $table = 'cat_categorias';

    protected $fillable = [
        'categoria',   
        'opcion', 
    ];
}
