<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Revue;

class PanierController extends Controller
{
    public function __construct(){
        if(!\Session::has('cart'))\Session::put('cart',array());
    }
    //Montrer le panier
    public function show(){
  $cart= \Session::get('cart');
$total = $this->total();
        return view('Rubriques.Panier',compact('cart','total'));
    }
    //Ajouter un élement au panier
    public function add(Revue $article){

        $cart= \Session::get('cart');
        $article->quantity = 1;
        $cart[$article->id]=$article;
        \Session::put('cart',$cart);

        return redirect()->route('paniervue');
    }


    //supprime un élément
    public function delete(Revue $article){

        $cart= \Session::get('cart');

        unset($cart[$article->id]);
        \Session::put('cart',$cart);

        return redirect()->route('paniervue');
    }
    //modifie un élément au panier
    public function up(Revue $article, $quantity){

        $cart= \Session::get('cart');

        $cart[$article->id]->quantity= $quantity;
        \Session::put('cart',$cart);

        return redirect()->route('paniervue');
    }
    //vide le panier

    public function vide()
    {
        \Session::forget('cart');

        return redirect()->route('paniervue');
    }
    //total du panier

    private function total(){
        $cart= \Session::get('cart');
        $total= 0;
        foreach ($cart as $c){
            $total += 50 * $c->quantity;
        }
        return $total;
    }
}
