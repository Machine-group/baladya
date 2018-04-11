<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Municipalite;
class MunicipaliteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function findMunicipalite(Request $request){


        //if our chosen id and products table prod_cat_id col match the get first 100 data

        //$request->id here is the id of our chosen option id
        $data=Municipalite::select('nom_muni_Ar','Code_Muni')->where('id_gov',$request->id)->take(100)->get();
        return response()->json($data);//then sent this data to ajax success
    }
}
