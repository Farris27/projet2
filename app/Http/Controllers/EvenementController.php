<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
use App\Http\Controllers\Controller;
use Validator;
use DB;
use App\Evenement;


class EvenementController extends Controller
{
    public function index(){

    }

    public function post(Request $request){
        $validator = Validator::make($request->all(),[
                    'titre' => 'required',
                    'texte' => 'required',
                    'datePublication'   => 'required',

        ]);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // J'enregistre dans la db

        $evenement = new Evenement;

        $evenement->titre = $request->input('titre');
        $evenement->texte= $request->input('texte');
        $evenement->datePublication = $request->input('datePublication');

        $evenement->save();

        return redirect()->back()->with(['status'=> 'Evénement enregistré']);
    }

    public function liste()
    {
        $evenement = Evenement::all();


        return view('Rubriques.Evenements',['evenements'=>$evenement]);
    }
     public function listeadmin()
{
$evenement = Evenement::all();


return view('Rubriques.liste',['evenements'=>$evenement]);
}
}
