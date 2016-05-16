<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Revue;

class RechercheController extends Controller
{


    public function recherche(Request $request) {

        $q = $request->input('search');

        $searchTerms = explode(' ', $q);

        foreach($searchTerms as $term)
        {
            $results = Article::where('titre', 'LIKE', '%'. $term .'%')->paginate(5);
        }

        return view('Revues.detail',['results'=>$results]);

    }



}
