<?php

namespace App\Http\Controllers;

use App\Gouvernorat;
use App\Municipalite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GouvernoratController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }



    public function index()
    {
        $gouvernorats = Gouvernorat::all();
        $municipalites = Municipalite::all();
        $user = Auth::user();
        return view('carte.carte', compact('gouvernorats','municipalites','user'));
    }




    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Gouvernorat  $gouvernorat
     * @return \Illuminate\Http\Response
     */
    public function show(Gouvernorat $gouvernorat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Gouvernorat  $gouvernorat
     * @return \Illuminate\Http\Response
     */
    public function edit(Gouvernorat $gouvernorat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Gouvernorat  $gouvernorat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gouvernorat $gouvernorat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Gouvernorat  $gouvernorat
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gouvernorat $gouvernorat)
    {
        //
    }
}
