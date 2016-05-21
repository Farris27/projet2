<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


/*
 * ROUTE PRINCIPALE
 */
Route::get('/',
    ['as' => 'detailAcceuil',
        'uses' => 'RubriqueController@detailAcceuil']
);

Route::get('/revues',
    ['as' => 'detailRevues',
        'uses' => 'RevueController@detailRevues']
);

Route::get('/articles',
    ['as' => 'detailArticles',
        'uses' => 'RubriqueController@detailArticles']
);

Route::get('/evenement',
    ['as' => 'detailEvenement',
        'uses' => 'EvenementController@liste']
);


/*
 * MOTEUR DE RECHERCHE
 */
Route::post('/recherche',
    ['as' => 'Recherche',
        'uses' => 'RechercheController@rechercheText']
);

Route::post('/revues',
    [ 'as' => 'revuesParAnnee',
        'uses' => 'RechercheController@rechercheAnnee' ]);

/*
 * INSCRIPTION
 */

Route::post('inscription',
    ['as' => 'inscription',
        'uses' =>'EmailController@inscription']
);


/*
 * PANIER D'ACHAT
*/
// PAnier d'achat
Route::get('panier/vue',[
    'as' => 'paniervue',
    'uses' =>'PanierController@show'
]);

// Ajout d'un item
Route::get('panier/add/{article}',[
    'as' => 'panieradd',
    'uses' =>'PanierController@add'
]);
// Route permettant la suppression d'un article du panier
Route::get('panier/delete/{article}',[
    'as' => 'panierdel',
    'uses' =>'PanierController@delete'
]);

// Affiche le formulaire pour le traitement paypal et recevoir les infos du client pour la commande
Route::get('panier/formulaire',[
    'as' => 'formulaire',
    'uses' =>'PanierController@formulaire'
]);
// Traite le formulaire qui permet la commande
Route::post('panier/formulaire/envoye',[
    'as' => 'traitementformu',
    'uses' =>'PanierController@formuenvoye'
]);
/*
 * Paypal
 */
// Envoi de notre panier à paypal
Route::get('payment', array(
    'as' => 'payment',
    'uses' => 'PaypalController@postPayment',
));
// statut de notre paiement à paypal
Route::get('payment/status', array(
    'as' => 'payment.status',
    'uses' => 'PaypalController@getPaymentStatus',
));
// Après avoir effectué le paiement Paypal pour l'abonnement on rédirectionne vers cette route-ci
Route::get('paymentabo/status', array(
    'as' => 'payment.abo.status',
    'uses' => 'PaypalController@getPaymentAboStatus',
));

//Requête paypal pour la cotisation (abonnement revue)
Route::get('paymentabo/{prix?}', array(
    'as' => 'paymentAbo',
    'uses' => 'PaypalController@postPaymentAbo',
));


// Connexion pour modification de la table evenement
Route::auth();
// Page d'accueil de la partie admin
Route::get('/admin', 'HomeController@index');
// Permet d'acceder à la liste des evenement pour qu'on puisse les modifier
Route::get('/admin/liste','HomeController@listeadmin');
// Recupere les donner du post de l'ajout d'un évenement
Route::post('/admin/liste',array('as'=>'adminliste', 'uses'=>'HomeController@post'));
// Arrive sur la page pour l'édition d'un événement
Route::get('admin/liste/edit/{id}', array(
    'as' => 'evenementmodif',
    'uses' => 'HomeController@edit',
));
// Modifie un événement
Route::put('admin/liste/edit/fait/{id}', array(
    'as' => 'evenementmodifier',
    'uses' => 'HomeController@update',
));
//Supprime un évenement
Route::delete('admin/liste/sup/{id}', array(
    'as' => 'evenementdel',
    'uses' => 'HomeController@delete',
));