<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Revue;
use Validator;

class PanierController extends Controller
{
    /**
     * Crée une session cart si une existe pas encore ou la modifie
     * PanierController constructor.
     */
    public function __construct(){
        if(!\Session::has('cart'))\Session::put('cart',array());
    }

    /**
     * retourne la vue d'un formulaire
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function formulaire (){
        return view('Rubriques.formulaire');
    }
    /**
     * retourne la vue du panier
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    //Montrer le panier
    public function show(){
  $cart= \Session::get('cart');
$total = $this->total();
        return view('Rubriques.Panier',compact('cart','total'));
    }
    /**
     * permet d'ajouter dans le panier avec l'objet revue qui fait la liaison avec la table article
     * @param Revue $article
     * @return \Illuminate\Http\RedirectResponse
     */
    //Ajouter un élement au panier
    public function add(Revue $article){

        $cart= \Session::get('cart');
        $article->quantity = 1;
        $cart[$article->id]=$article;
        \Session::put('cart',$cart);

        return redirect()->route('paniervue');
    }

    /**
     * permet la suppression d'un élément du panier
     * @param Revue $article
     * @return \Illuminate\Http\RedirectResponse
     */
    //supprime un élément
    public function delete(Revue $article){

        $cart= \Session::get('cart');

        unset($cart[$article->id]);
        \Session::put('cart',$cart);

        return redirect()->route('paniervue');
    }


    //total du panier
    /**
     * permet d'afficher le total du panier
     * @return int
     */
    private function total(){
        $cart= \Session::get('cart');
        $total= 0;
        foreach ($cart as $c){
            $total += 50 * $c->quantity;
        }
        return $total;
    }

    /**
     * permet de récupérer les donner du formulaire et fait une redirection vers paypal
     * @param Request $request
     * @return $this|\Illuminate\Http\RedirectResponse
     */
   public function formuenvoye(Request $request){
       $validator = Validator::make($request->all(),[
           'nom' => 'required',
           'prenom' => 'required',
           'adresse' => 'required',
           'code'   => 'required',
           'tel' => 'required',

       ]);
       if($validator->fails()){
           return redirect()->back()->withErrors($validator)->withInput();
       }
       if(!\Session::has('clientRevue')){

           \Session::put('clientRevue', array(
               'nom' => $request->get('nom'),
               'prenom' => $request->get('prenom'),
               'adresse' => $request->get('adresse'),
               'code' => $request->get('code'),
               'tel' => $request->get('tel')));
       }

     return  redirect()->route('payment');
   }
}
