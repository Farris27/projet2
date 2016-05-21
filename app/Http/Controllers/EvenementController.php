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

   // Permet d'acceder à la liste des événéments pour la modifications 
    
    public function liste()
    {
        $evenement = Evenement::all();


        return view('Rubriques.Evenements',['evenements'=>$evenement]);
    }
    
}
