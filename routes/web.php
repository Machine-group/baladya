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

Route::get('home', [
    'middleware' => 'auth',
    'uses' => 'HomeController@index'
]);

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


Route::get('/rapportPolitique', 'RapportPolitiqueController@index')->name('RP');
Route::get('/rapportPresidentiel', 'RapportPolitiqueController@presidentiel')->name('RPP');
Route::get('/rapportlegislatif', 'RapportPolitiqueController@legislatif')->name('RPL');
Route::get('/rapportPolitique', 'RapportPolitiqueController@data')->name('RP');

Route::get('/rapportMunicipal', 'RapportMunicipalController@index')->name('RM');

Route::resource('carteIntelligente', 'LogementModeOccupationController');
Route::resource('representativite', 'RepMunicipaliteController');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/findMunicipalite','MunicipaliteController@findMunicipalite');
Route::get('/findMun','repMunicipaliteController@findMunicipalite');
Route::get('/findSecteur','SecteurController@findSecteur');
Route::get('/findRep','repMunicipaliteController@findRep');