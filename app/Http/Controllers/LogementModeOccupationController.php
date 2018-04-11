<?php

namespace App\Http\Controllers;

use App\Logement_Mode_Occupation;
use App\Gouvernorat;
use Illuminate\Http\Request;


class LogementModeOccupationController extends Controller
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

        return view('carte.carte', compact('gouvernorats'));
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

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Logement_Mode_Occupation  $logement_Mode_Occupation
     * @return \Illuminate\Http\Response
     */
    public function show(Logement_Mode_Occupation $logement_Mode_Occupation)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Logement_Mode_Occupation  $logement_Mode_Occupation
     * @return \Illuminate\Http\Response
     */
    public function edit(Logement_Mode_Occupation $logement_Mode_Occupation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Logement_Mode_Occupation  $logement_Mode_Occupation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Logement_Mode_Occupation $logement_Mode_Occupation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Logement_Mode_Occupation  $logement_Mode_Occupation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Logement_Mode_Occupation $logement_Mode_Occupation)
    {
        //
    }
}
