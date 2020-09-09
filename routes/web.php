<?php

use Illuminate\Support\Facades\Route;

// Rotas Públicas
Route::group([
    'middleware' => [],
    'prefix'     => '',
    'namespace'  => 'Publico'
], function () {
    Route::get('/', 'InicialController@index');
    Route::get('/inicial', 'InicialController@index')->name('inicial');
    Route::get('/sobre', 'SobreNosController@index')->name('sobre');
    Route::get('/noticias', 'NoticiasController@index')->name('noticias');
    Route::get('/eventos', 'AgendaEventosController@index')->name('eventos');
    Route::get('/legislacao', 'LegislacaoController@index')->name('legislacao');
    Route::get('/parceiros', 'ParceirosController@index')->name('parceiros');
    Route::get('/uteis', 'LinksUteisController@index')->name('uteis');
    Route::get('/sejamembro', 'SejaMembroController@index')->name('sejamembro');
    Route::get('/contato', 'ContatoController@index')->name('contato');
});


// Rotas Admin
Route::group([
    'middleware' => [],
    'prefix'     => 'admin',
    'namespace'  => 'Admin'
], function () {
    Route::get('/', 'DashboardController@index');
    Route::get('/dashboard', 'DashboardController@index');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
