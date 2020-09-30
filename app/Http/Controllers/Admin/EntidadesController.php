<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Request;

use Validator;

use Illuminate\Support\Facades\DB;

use App\Entidade;

class EntidadesController extends Controller
{
    
    public function index()
    {
        $listar_entidades = Entidade::all()->sortByDesc("id");;

        return view('admin.entidades.index')->with('listar_entidades', $listar_entidades);
    }


    public function create()
    {
        return view('admin.entidades.create');
    }


    public function store(Request $request)
    {
        $nome = Request::input('entidadeNome');

        $validator = Validator::make(
            [
                'nome' => $nome
            ],
            [
                'nome' => 'required|min:3'
            ],
            [
                'required' => 'O campo ":attribute" é obrigatório.',
            ]
        );

        if ($validator->fails()) {

            return redirect()->action('Admin\EntidadesController@create')->withErrors($validator)->withInput();

        }

        $entidade = new Entidade();
        $entidade->nome = $nome;
        $entidade->save();

        return redirect()->action('Admin\EntidadesController@index')->withInput();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $lista_entidade = Entidade::find($id);

        if (empty($lista_entidade)) {
            
            return redirect()->action('Admin\EntidadesController@index');

        } else {

            return view('admin.entidades.edit')->with('lista_entidade', $lista_entidade);

        }        
    }


    public function update(Request $request, $id)
    {
        $nome = Request::input('entidadeNome');

        $validator = Validator::make(
            [
                'nome' => $nome
            ],
            [
                'nome' => 'required|min:3'
            ],
            [
                'required' => 'O campo ":attribute" é obrigatório.',
            ]
        );

        if ($validator->fails()) {

            return redirect()->action('Admin\EntidadesController@edit', $id)->withErrors($validator)->withInput();

        }

        $entidade = Entidade::find($id);
        $entidade->nome = $nome;
        $entidade->save();

        return redirect()->action('Admin\EntidadesController@index')->withInput();
    }


    public function destroy($id)
    {

        Entidade::find($id)->delete();

        return redirect()->action('Admin\EntidadesController@index');
    }
}
