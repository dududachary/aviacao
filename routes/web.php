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

Route::get('/', 'TemplateController@index');
Route::get('/inicial', 'InicialController@index');
Route::get('/sobre', 'SobreNosController@index');
Route::get('/noticias', 'NoticiasController@index');
Route::get('/eventos', 'AgendaEventosController@index');
Route::get('/legislacao', 'LegislacaoController@index');
Route::get('/parceiros', 'ParceirosController@index');
Route::get('/uteis', 'LinksUteisController@index');
Route::get('/sejamembro', 'SejaMembroController@index');
Route::get('/contato', 'ContatoController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
