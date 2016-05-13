<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Revue;

class RevueController extends Controller
{


    public function detailRevues(){

        $revues = Revue::paginate(3);

        return view('Revues.detail',['revues'=>$revues]);

    }



}
