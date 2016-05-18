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

        return view('Rubriques.Acceuil');

    }

}
