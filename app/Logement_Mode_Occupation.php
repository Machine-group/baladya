<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Logement_Mode_Occupation extends Model
{
    protected $fillable = [
        'Code_Gov', 'Nom_Delegation_Fr','Code_Delegation','Total','Total_occup','Total_secondaire','Total_vacants'
        ,'Total_abandonne','Total_enConstruction'
    ];
}
