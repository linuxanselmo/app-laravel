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

Route::get('/', function (){
    return view('welcome');
});

Auth::routes();

Route::get('/login/admin', 'Auth\LoginController@showAdminLoginForm');
Route::get('/login/anunciante', 'Auth\LoginController@showAnuncianteLoginForm');
Route::get('/register/admin', 'Auth\RegisterController@showAdminRegisterForm');
Route::get('/register/anunciante', 'Auth\RegisterController@showAnuncianteRegisterForm');

Route::post('/login/admin', 'Auth\LoginController@adminLogin');
Route::post('/login/anunciante', 'Auth\LoginController@anuncianteLogin');
Route::post('/register/admin', 'Auth\RegisterController@createAdmin');
Route::post('/register/anunciante', 'Auth\RegisterController@createAnunciante');

Route::view('/home', 'home')->middleware('auth');
Route::view('/admin', 'admin');
Route::view('/anunciante', 'anunciante');

