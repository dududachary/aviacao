<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

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
    Route::get('/sejamembro/buscadocumento', 'SejaMembroController@buscaDocumento')->name('sejamembro.buscadocumento');
    Route::post('/sejamembro/formularioMembro', 'SejaMembroController@formularioMembro')->name('sejamembro.formulariomembro');
    Route::get('/sejamembro/formularioMembro/createMembroFisico', 'SejaMembroController@createMembroFisico');
    Route::get('/sejamembro/formularioMembro/createMembroJuridico', 'SejaMembroController@createMembroJuridico');
    Route::post('/sejamembro/formularioMembro/store', 'SejaMembroController@store');
    Route::get('/sejamembro/envioconfirmado', 'SejaMembroController@envioConfirmado');

    Route::get('/contato', 'ContatoController@index')->name('contato');

    Route::get('/login', 'LoginController@index')->name('login');
    Route::post('/login/verificacao', 'LoginController@login')->name('login.verificacao');
    Route::post('/logout', 'LoginController@logout')->name('logout');

    Route::get('/acesso/buscarpessoa', 'AcessoController@exibeBuscaPessoa')->name('acesso.buscarpessoa');
    Route::post('/acesso/verificarEmailCadastrado', 'AcessoController@verificarEmailCadastrado')->name('acesso.verificaremailcadastrado');
    Route::get('/acesso/formularioCadastraUsuario/{idPessoa}', 'AcessoController@formularioCadastraUsuario')->name('acesso.formulariocadastrausuario');
    Route::post('/acesso/criaUsuario', 'AcessoController@storeUsuario');
});


// Rotas Admin
Route::group([
    // 'middleware' => ['auth'],
    'middleware' => [],
    'prefix'     => 'admin',
    'namespace'  => 'Admin'
], function () {
    Route::get('/', 'MeusDadosController@index');
    Route::get('/meusdados', 'MeusDadosController@index')->name('admin.meusdados');

    Route::get('/entidades/index', 'EntidadesController@index');    
    Route::get('/entidades/create', 'EntidadesController@create');
    Route::post('/entidades/store', 'EntidadesController@store');
    Route::get('/entidades/edit/{id}', 'EntidadesController@edit');
    Route::post('/entidades/update/{id}', 'EntidadesController@update');
    Route::get('/entidades/destroy/{id}', 'EntidadesController@destroy');


    Route::get('/pessoas/index', 'PessoasController@index');
    Route::get('/pessoas/type', 'PessoasController@type');
    Route::post('/pessoas/findCpfCnpj', 'PessoasController@findCpfCnpj');
    Route::get('/pessoas/create/{type}', 'PessoasController@create');
    Route::post('/pessoas/store', 'PessoasController@store');
    Route::get('/pessoas/edit/{id}', 'PessoasController@edit');
    Route::post('/pessoas/update/{id}', 'PessoasController@update');
    Route::get('/pessoas/liberarCadastro/{id}', 'PessoasController@liberarCadastro');
    Route::get('/pessoas/bloquearCadastro/{id}', 'PessoasController@bloquearCadastro');
    Route::get('/pessoas/destroy/{id}', 'PessoasController@destroy');

    Route::get('/usuarios/index', 'UsuariosController@index');
    Route::get('/usuarios/pessoa/', 'UsuariosController@select_pessoa');
    Route::get('/usuarios/create/{id_pessoa}', 'UsuariosController@create');
    Route::post('/usuarios/store', 'UsuariosController@store');
    Route::get('/usuarios/edit/{id}', 'UsuariosController@edit');
    Route::post('/usuarios/update/{id}', 'UsuariosController@update');
    Route::get('/usuarios/destroy/{id}', 'UsuariosController@destroy');

    Route::get('/linksuteis', 'LinksUteisController@index');
    Route::get('/linksuteis/index', 'LinksUteisController@index');
    Route::get('/linksuteis/create', 'LinksUteisController@create');
    Route::post('/linksuteis/store', 'LinksUteisController@store');
    Route::get('/linksuteis/edit/{id}', 'LinksUteisController@edit');
    Route::post('/linksuteis/update/{id}', 'LinksUteisController@update');
    Route::get('/linksuteis/destroy/{id}', 'LinksUteisController@destroy');

    Route::get('/noticias', 'NoticiasController@index');
    Route::get('/agendaeventos', 'AgendaEventosController@index');
    Route::get('/parceiros', 'ParceirosController@index');
    Route::get('/materias', 'MateriasController@index');
    Route::get('/questoes', 'QuestoesController@index');
    Route::get('/aplicaprova', 'AplicaProvaController@index');
});



Route::get('/home', 'HomeController@index')->name('home');
