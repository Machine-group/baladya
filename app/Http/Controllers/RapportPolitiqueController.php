<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Storage;

class RapportPolitiqueController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        return view('rapportPolitique.rapportPolitique');
    }

    public function legislatif()
    {
        return view('rapportPolitique.legislatif');
    }
    public function presidentiel()
    {
        return view('rapportPolitique.presidentielle');
    }
    public function data()
    {

        $test = 'Rapport politique';
        return view('rapportPolitique.rapportPolitique')->with('test',$test);
    }
}
