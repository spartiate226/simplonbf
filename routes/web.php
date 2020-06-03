<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('accueil');
});

//apprenant
Route::get('apprnants/{statut}','apprenantControlleur@index');
Route::get('new-apprnant','apprenantControlleur@create');
Route::post('new-apprnant','apprenantControlleur@store');
//publication
Route::get('publication/{pub}','publicationController@index');
Route::get('publication/{id}','publicationController@show');
Route::get('publication','publicationController@create');
Route::post('publication','publicationController@store');
//projet
Route::get('projet/{id_apprenant}','projetController@');
//recherche
Route::post('search/{type}',''); 