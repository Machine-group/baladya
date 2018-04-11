<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Secteur extends Model
{
    protected $fillable = [
        'Code_Sect', 'Lib_Sect_Fr','Code_Del','Code_Gouv'
    ];
}
