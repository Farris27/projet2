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

        $articles = Article::all();

        return view('Revues.detail',['revues'=>$revues, 'articles'=>$articles]);

    }



}
