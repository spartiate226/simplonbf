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

Route::get('/','evenementControlleur@index');

//apprenant
Route::get('apprnants/{statut}','apprenantControlleur@index');
Route::get('new-apprnant','apprenantControlleur@create');
Route::post('new-apprnant','apprenantControlleur@store');
//publication
Route::get('publication','evenementControlleur@create');
Route::post('publication','evenementControlleur@store');

Route::get('publication/{pub?}','evenementControlleur@index');
Route::get('publications/{id}','evenementControlleur@show');

//projet
Route::get('projet/{id_apprenant}','projetController@index');
//recherche
Route::post('search/{type}','searchController@index');