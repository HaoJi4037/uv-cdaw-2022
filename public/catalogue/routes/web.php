<?php

use Illuminate\Support\Facades\Route;

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

Route::get('test/{prenom}', function ($prenom) {
    return view('leNomDeLaVue', ['prenom' => $prenom]);
})->where('prenom', '[A-Za-z]+') ->name('route');


Route::get('/', function(){
    return view('welcome');
});
Route::get('listeMedias', 'App\Http\controllers\listeMediasController@getListeMedias');
Route::get('listeMedias/{type}/{annee}', 'App\Http\controllers\listeMediasController@getListeMediasTypeAnnee');

//user add route
Route::get('users/add', 'App\Http\controllers\UserController@add');
//user executer执行 add route
Route::post('users/store', 'App\Http\controllers\UserController@store');
//用户列表页路由
Route::get('users/index', 'App\Http\controllers\UserController@index');
//用户修改路由
Route::get('users/edit/{id}', 'App\Http\controllers\UserController@edit');

//后台
Route::group(['prefix'=>'admin','namespace'=>'App\Http\controllers\Admin'],function(){
    //后台登录路由
        Route::get('login','LoginController@login');
    //处理后台登录的路由
        Route::post('dologin','LoginController@doLogin');
    //加密算法
        Route::get('cryto','LoginController@jiami');
    });

Route::get('admin/index', 'App\Http\controllers\Admin\LoginController@index');

Route::get('users/select', 'App\Http\controllers\UserController@select');


Route::get('show/all', 'App\Http\controllers\ShowFilmsController@showAllFilms');
Route::post('/addFilm', 'App\Http\controllers\ShowFilmsController@addFilm');
Route::post('/updateFilm', 'App\Http\controllers\ShowFilmsController@updateFilm');
Route::post('/deleteFilm', 'App\Http\controllers\ShowFilmsController@deleteFilm');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
