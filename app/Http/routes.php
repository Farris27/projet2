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
    'uses' => 'RubriqueController@detailRevues']
);

Route::get('/articles',
    ['as' => 'detailArticles',
    'uses' => 'RubriqueController@detailArticles']
);

Route::get('/evenement',
    ['as' => 'detailEvenement',
    'uses' => 'RubriqueController@detailEvenement']
);
