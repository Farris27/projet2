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

Route::get('/', function () {
    return view('Rubrique/Acceuil');
});

Route::get('/revues', function () {
        ['as' => 'detailRevues',
        'uses' => 'RubriqueController@detailRevues'];
});

Route::get('/articles', function () {
        ['as' => 'detailArticles',
        'uses' => 'RubriqueController@detailArticles'];
});

Route::get('/evenement', function () {
        ['as' => 'detailEvenement',
        'uses' => 'RubriqueController@detailEvenement'];
});
