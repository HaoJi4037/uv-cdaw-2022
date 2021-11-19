<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShowFilmsController;

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
Route::get('test/{type}/{annee}', function () {
    echo 'toto';

});

Route::get('appelDeMaVue/{prenom}', function ($prenom) {
    //return view('welcome');
    return view('leNomDeLaVue', ['prenom' => $prenom]);

})->where('prenom', '[A-Za-z]+') ->name('maroute');


Route::get('listeMedias', 'App\Http\controllers\listeMediasController@getListeMedias');
Route::get('listeMedias/{type}/{annee}', 'App\Http\controllers\listeMediasController@getListeMediasTypeAnnee');
Route::get('users/add', 'App\Http\controllers\UserController@add');