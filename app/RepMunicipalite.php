<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RepMunicipalite extends Model
{
    protected $fillable = [
        'nom','age', 'profession', 'type','secteur','niveau_academique','id_municipalite'
    ];
}
