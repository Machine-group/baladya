<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Municipalite extends Model
{
    protected $fillable = [
        'Code_Muni', 'id_gov','nom_muni_Ar'
    ];
}
