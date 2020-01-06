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
    return view('welcome');
});

Route::get('/autor', 'AutorController@index');

Route::get('/kontakt', 'KontaktController@index');

Route::get('/najlepsze', 'KsiazkiController@najlepsze');
Route::get('/najgorsze', 'KsiazkiController@najgorsze');
Route::get('/polecane', 'KsiazkiController@polecane');
Route::get('/recenzje', 'KsiazkiController@recenzje');
Route::get('/opinie', 'KsiazkiController@opinie');

Route::get('/ksiazka1', 'KsiazkiController@ksiazka1');
Route::get('/ksiazka2', 'KsiazkiController@ksiazka2');
Route::get('/ksiazka3', 'KsiazkiController@ksiazka3');
Route::get('/ksiazka4', 'KsiazkiController@ksiazka4');
Route::get('/ksiazka5', 'KsiazkiController@ksiazka5');
