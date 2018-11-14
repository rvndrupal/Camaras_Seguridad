<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Master extends Model
{
    protected $fillable = [
        'titulo', 'nosotros','noso_titulo','noso_descri','banner'
    ];
}
