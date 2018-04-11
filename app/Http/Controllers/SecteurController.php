<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Secteur;
class SecteurController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function findSecteur(Request $request){

        $data=Secteur::select('Lib_Sect_Fr','Cod_Sect')->where('Code_Muni',$request->id)->take(100)->get();
        return response()->json($data);//then sent this data to ajax success
    }
}
