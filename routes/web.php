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



//apprenant
Route::get('apprenants/{statut}','apprenantControlleur@index');
Route::get('new-apprenant','apprenantControlleur@create');
Route::post('new-apprenant','apprenantControlleur@store');
//publication
Route::get('publication','evenementControlleur@create');
Route::post('publication','evenementControlleur@store');

Route::get('/','evenementControlleur@index');
Route::get('publications/{pub?}','evenementControlleur@index');
Route::get('publication/{id}','evenementControlleur@show');

//projet
Route::get('projets/{id_apprenant}','projetControlleur@index');
//recherche
Route::post('search','searchController@index');