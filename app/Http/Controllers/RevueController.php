<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Revue;

class RevueController extends Controller
{


    public function detailRevues(){
        
        $revues = Revue::paginate(3);

        return view('Revues.detail',['revues'=>$revues]);

    }

    public function abonnement(Request $request){
        //Contraintes de validation
        $validator = Validator::make($request->all(),[
            'nom'=>'required',
            'prenom'=>'required|max:10',
        ]);
        //Si l'une des contraintes n'est pas respectée on rédirige à nouveau vers la page du formulaire et on retourne les erreurs ainsi que l'ancien contenu des champs
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }



        $pays = $request->input('pays');

        $UE = array('Allemagne','Autriche', 'Bulgarie', 'Chypre', 'Croatie', 'Danemark', 'Espagne', 'Estonie', 'Finlande', 'France', 'Grèce', 'Hongrie', 'Irlande', 'Italie', 'Lettonie', 'Lituanie', 'Luxembourg', 'Malte', 'Pays-Bas', 'Pologne', 'Portugal', 'République tchèque', 'Roumanie', 'Royaume-Uni', 'Slovaquie', 'Slovénie', 'Suède');

        if($pays  === "Belgique"){
            $prix = number_format(55,2);
        }elseif (in_array($pays, $UE)) {
            $prix = number_format(65,2);
        }else{
            $prix = number_format(75,2);
        }



        \Session::flash('submitted', true);

        return redirect()->back()->with(['prix'=>$prix]);

       

    }


}
