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

/* ---------
gestionar que rutas van a trabajar con middleware
-----------*/
Route::group(['middleware' => ['web']], function () { 

Route::get('/', function () {
    /*return view('welcome');*/
    return view('index');
});

Route::get('/login', function () {
    /*return view('welcome');*/
    return view('login');
});

Auth::routes();

Route::get('/home', 'HomeController@index');


/*-------------------------------------------
| Route para gestionar los idiomas
---------------------------------------------*/
    Route::get('lang/{lang}', function ($lang) {        
        session(['lang' => $lang]);
        return \Redirect::back();
    })->where([
        'lang' => 'en|es' // filtro para limitar la asignacion de variables 
    ]);
    
});