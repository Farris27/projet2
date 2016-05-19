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
    'uses' => 'RubriqueController@detailEvenement']
);


/*
 * MOTEUR DE RECHERCHE
 */
Route::post('/recherche',
    ['as' => 'Recherche',
    'uses' => 'RechercheController@recherche']
);


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

Route::get('panier/delete/{article}',[
    'as' => 'panierdel',
    'uses' =>'PanierController@delete'
]);
Route::get('panier/vide',[
    'as' => 'panier-vide',
    'uses' =>'PanierController@vide'
]);
Route::get('panier/update/{article}/{quantity?}',[
    'as' => 'panier-actu',
    'uses' =>'PanierController@up'
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

// Connexion pour modification de la table evenement
Route::auth();

Route::get('/home', 'HomeController@index');
