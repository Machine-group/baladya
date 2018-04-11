<?php

namespace App\Http\Controllers;

use App\Gouvernorat;
use App\Municipalite;
use App\RepMunicipalite;
use Illuminate\Http\Request;

class RepMunicipaliteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   $gouvernorats = Gouvernorat::all();
        $repMunicipalites = RepMunicipalite::All();
        return view('repMunicipalite.repMunicipalite',compact('repMunicipalites','gouvernorats'));
    }

    public function findMunicipalite(Request $request){

        $data=Municipalite::select('nom_muni_Ar','Code_Muni')->where('id_gov',$request->id)->take(100)->get();
        return response()->json($data);
    }

    public function findRep(Request $request){

        $data=RepMunicipalite::select('nom','age','profession','type','secteur','niveau_academique')->where('id_municipalite',$request->id)->take(100)->get();
        return response()->json($data);//then sent this data to ajax success
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
     * @param  \App\RepMunicipalite  $repMunicipalite
     * @return \Illuminate\Http\Response
     */
    public function show(RepMunicipalite $repMunicipalite)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\RepMunicipalite  $repMunicipalite
     * @return \Illuminate\Http\Response
     */
    public function edit(RepMunicipalite $repMunicipalite)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\RepMunicipalite  $repMunicipalite
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RepMunicipalite $repMunicipalite)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\RepMunicipalite  $repMunicipalite
     * @return \Illuminate\Http\Response
     */
    public function destroy(RepMunicipalite $repMunicipalite)
    {
        //
    }
}
