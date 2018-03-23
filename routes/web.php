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
})->name('accueil');
Route::get('/rapportPolitique', 'RapportPolitiqueController@index')->name('RP');
Route::get('/rapportPolitique', 'RapportPolitiqueController@data')->name('RP');

Route::get('/rapportMunicipal', 'RapportMunicipalController@index')->name('RM');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
