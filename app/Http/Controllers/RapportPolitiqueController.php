<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RapportPolitiqueController extends Controller
{
    public function index()
    {
        return view('rapportPolitique.index');
    }
}