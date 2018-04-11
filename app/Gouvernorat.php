<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gouvernorat extends Model
{
    protected $fillable = [
        'Code_Gov', 'Nom_Gov_Fr'
    ];
}
