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
    Route::get('/', 'MeusDadosController@index');
    Route::get('/meusdados', 'MeusDadosController@index');

    Route::get('/entidades/index', 'EntidadesController@index');    
    Route::get('/entidades/create', 'EntidadesController@create');
    Route::post('/entidades/store', 'EntidadesController@store');
    Route::get('/entidades/edit/{id}', 'EntidadesController@edit');
    Route::post('/entidades/update/{id}', 'EntidadesController@update');
    Route::get('/entidades/destroy/{id}', 'EntidadesController@destroy');


    Route::get('/pessoas/index', 'PessoasController@index');
    Route::get('/pessoas/type', 'PessoasController@type');
    Route::get('/pessoas/create/{type}', 'PessoasController@create');
    Route::get('/pessoas/create/{type}', 'PessoasController@create');

    Route::get('/usuarios', 'UsuariosController@index');
    Route::get('/noticias', 'NoticiasController@index');
    Route::get('/agendaeventos', 'AgendaEventosController@index');
    Route::get('/parceiros', 'ParceirosController@index');
    Route::get('/linksuteis', 'LinksUteisController@index');
    Route::get('/materias', 'MateriasController@index');
    Route::get('/questoes', 'QuestoesController@index');
    Route::get('/aplicaprova', 'AplicaProvaController@index');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
