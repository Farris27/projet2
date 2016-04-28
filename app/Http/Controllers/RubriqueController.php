<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use Illuminate\Http\Request;
use App\Http\Requests;

class RubriqueController extends BaseController{


    public function detailAcceuil(){
        return view('Rubriques.Acceuil');
    }

    public function detailRevues(){
        return view('Rubriques.Revues');
    }

    public function detailArticles(){
        return view('Rubriques.Articles');
    }

    public function detailEvenement(){
        return view('Rubriques.Evenements');
    }
    
}
