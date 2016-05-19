<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Revue;

class RechercheController extends Controller
{


    public function rechercheText(Request $request) {

        $q = $request->input('search');

        $searchTerms = explode(' ', $q);

        foreach($searchTerms as $term)
        {
            $results = Article::where('titre', 'LIKE', '%'. $term .'%')
                            ->orWhere('auteur', 'LIKE', '%'. $term .'%')
                            ->orWhere('pays', 'LIKE', '%'. $term .'%')
                            ->orWhere('numeroPage', 'LIKE', '%'. $term .'%')->paginate(5);
        }

        return view('Revues.detail',['results'=>$results]);

    }


    public function rechercheAnnee(Request $request) {

        $annee = $request->input('annee');

        $revues = Revue::where('annee', $annee)->paginate(5);

        return view('Revues.detail',['revues'=>$revues]);

    }





}
