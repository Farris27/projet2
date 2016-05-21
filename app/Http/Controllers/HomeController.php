<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Evenement;
use Validator;
use DB;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Permet de faire l'ajout du formulaire
     * @param Request $request
     * @return $this|\Illuminate\Http\RedirectResponse
     */
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

    /**
     * Permet la suppression d'un champ de la table événements
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function delete($id){

        $evenement = Evenement::findOrFail($id);
        $deleted = $evenement->delete();

        return redirect()->back()->with(['status'=> 'Evénement eliminé']);

    }

    /**
     * permet l'affichage dans le formulaire pour l'édition
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id){
        $evenement = Evenement::findOrFail($id);

        return view('Rubriques.edit',['evenement'=>$evenement]);
    }

    /**
     * permet la modification d'un élémenet de la table evenement
     * @param Request $request
     * @param $id
     * @return $this|\Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id){
        $evenement = Evenement::findOrFail($id);

        $validator = Validator::make($request->all(),[
            'titre' => 'required',
            'texte' => 'required',
            'datePublication'   => 'required',

        ]);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $input = $request->all();

        $evenement->fill($input)->save();

        return redirect('admin/liste')->with(['status'=> 'Evénement modifié']);
    }

    /**
     * affiche la liste des événements dans la partie admin
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function listeadmin()
    {
        $evenement = Evenement::all();


        return view('Rubriques.liste',['evenements'=>$evenement]);
    }

}
