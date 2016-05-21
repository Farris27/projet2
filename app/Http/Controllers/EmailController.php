<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{

    public function inscription(Request $request){

        $prenom = $request->input('first_name');
        $nom = $request->input('last_name');
        $adresse = $request->input('address');
        $email = $request->input('email');
        $pays = $request->input('pays');

        Mail::send('Emails.inscription', ['prenom' => $prenom, 'nom' => $nom, 'adresse' => $adresse, 'email' => $email, 'pays' => $pays], function ($message){

            $message->subject('Abonnement');

        });

        return back();

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

        });

        return back();

    }

}
