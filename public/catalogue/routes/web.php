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
// Route::get('listeMedias', 'App\Http\controllers\listeMediasController@getListeMedias');
// Route::get('listeMedias/{type}/{annee}', 'App\Http\controllers\listeMediasController@getListeMediasTypeAnnee');
/*
//user add route
Route::get('users/add', 'App\Http\controllers\UserController@add');
//user executer执行 add route
Route::post('users/store', 'App\Http\controllers\UserController@store');
//用户列表页路由
Route::get('users/index', 'App\Http\controllers\UserController@index');
//用户修改路由
Route::get('users/edit/{id}', 'App\Http\controllers\UserController@edit');
*/
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
//后台欢迎页
Route::get('admin/welcome','App\Http\controllers\Admin\LoginController@welcome');
//后台退出登录路由
Route::get('admin/logout','App\Http\controllers\Admin\LoginController@logout');

//user list
Route::get('admin/user','App\Http\controllers\Admin\UserController@index');
Route::get('admin/user/create','App\Http\controllers\Admin\UserController@create');


//    后台用户模块相关路由
//    给用户授权相关路由
Route::get('user/auth/{id}','App\Http\controllers\Admin\UserController@auth');
Route::post('user/doauth','App\Http\controllers\Admin\UserController@doAuth');
//修改用户状态 停用  启用
Route::post('user/changestatus','App\Http\controllers\Admin\UserController@changestatus');
//    删除所有选中用户路由
Route::get('user/del','App\Http\controllers\Admin\UserController@delAll');
Route::resource('user','App\Http\controllers\Admin\UserController');


//    角色模块
//    角色授权路由
Route::get('role/auth/{id}','App\Http\controllers\Admin\RoleController@auth');
Route::post('role/doauth','App\Http\controllers\Admin\RoleController@doAuth');
Route::resource('role','App\Http\controllers\Admin\RoleController');


// 权限模块路由
Route::resource('permission','PermissionController');

//    分类路由
//    修改排序
Route::post('cate/changeorder','App\Http\controllers\Admin\CateController@changeOrder');
Route::resource('cate','App\Http\controllers\Admin\CateController');

Route::get('listeMedias', function () {
    return view('listeMedias');
});

Route::get('films/{imdb_id}', function ($imdb_id) {return view('films', ['imdb_id' => $imdb_id]);});
Route::post('/addComment', 'App\Http\controllers\CommentController@create_comment');
Route::post('/addToWatchlist', 'App\Http\controllers\listeMediasController@add_to_WatchList');
Route::post('/addTolist', 'App\Http\controllers\listeMediasController@add_to_list');
Route::post('/admin/login', function () {return view('admin/login');
});
Route::get('france',function(){return view('france');});
Route::get('usa',function(){ return view('usa');});

Route::get('users/select', 'App\Http\controllers\UserController@select');


Route::get('show/all', 'App\Http\controllers\ShowFilmsController@showAllFilms');
Route::post('/addFilm', 'App\Http\controllers\ShowFilmsController@addFilm');
Route::post('/updateFilm', 'App\Http\controllers\ShowFilmsController@updateFilm');
Route::post('/deleteFilm', 'App\Http\controllers\ShowFilmsController@deleteFilm');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
