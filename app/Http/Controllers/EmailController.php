<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Mail;

class EmailController extends Controller
{

    public function inscription(Request $request){

    // récupere le pays pour la vérification et donner un prix de l'abonnement
        $pays = $request->input('pays');


 // Stocke les pays européens dans un tableau pour verifier une condition de notre if
        $UE = array('Allemagne','Autriche', 'Bulgarie', 'Chypre', 'Croatie', 'Danemark', 'Espagne', 'Estonie', 'Finlande', 'France', 'Grèce', 'Hongrie', 'Irlande', 'Italie', 'Lettonie', 'Lituanie', 'Luxembourg', 'Malte', 'Pays-Bas', 'Pologne', 'Portugal', 'République tchèque', 'Roumanie', 'Royaume-Uni', 'Slovaquie', 'Slovénie', 'Suède');

        if($pays  === "Belgique"){
            $prix = 55;
        }elseif (in_array($pays, $UE)) {
            $prix = 65;
        }else{
            $prix = 75;
        };
        // attribue un format pour le prix.
        $prix=number_format($prix);

        // On crée une session abo si on en a pas déja une .
        if(!\Session::has('abo')){
            // On stocke dans la session abo les éléments de notre formulaire
            \Session::put('abo', array(
                'nom' => $request->get('nom'),
                'prenom' => $request->get('prenom'),
                'adresse' => $request->get('addresse'),
                'email' => $request->get('email'),
                'pays' => $request->get('pays')));
        }
        // renvoie pour le payement paypal
        return redirect()->route('paymentAbo',['prix'=>$prix]);
    }

    public function envoiArticle(Request $request){

        $titre = $request->input('titre');
        $auteur = $request->input('auteur');
        $fichier = $request->file('fichier');

        Mail::send('Emails.envoiArticle', ['titre' => $titre, 'auteur' => $auteur, 'fichier' => $fichier], function ($message) use($fichier){

            $message->subject('Nouvel article');

            $message->attach($fichier->getRealPath(), array(
                    'as' => $fichier->getClientOriginalName(),
                    'mime' => $fichier->getMimeType())
            );
            $message->to('benfarris40@gmail.com');

        });

        return back();

    }

}
