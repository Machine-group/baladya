<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Storage;

class RapportPolitiqueController extends Controller
{
    public function index()
    {
        return view('rapportPolitique.rapportPolitique');
    }

    public function data()
    {

        $test = 'Rapport politique';
        return view('rapportPolitique.rapportPolitique')->with('test',$test);
    }
}
