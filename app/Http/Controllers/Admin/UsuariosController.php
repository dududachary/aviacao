<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Request;

use Validator;

use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Str;

use App\Usuario;

use App\Pessoa;

use App\User;

class UsuariosController extends Controller
{
    public function index()
    {

        // $listar_entidades = Entidade::all()->sortByDesc("id");

        // return view('admin.entidades.index')->with('listar_entidades', $listar_entidades);

        return view('admin.usuarios.index');
    }

    public function select_pessoa()
    {
        $buscar = Request::input('buscar');
        
        if ($buscar) {

            $lista_pessoas = Pessoa::where('nome_pessoal', 'like', '%'.$buscar.'%')
                ->orWhere('nome_social', 'like', '%'.$buscar.'%')
                ->orWhere('cpf', 'like', '%'.$buscar.'%')
                ->orWhere('razao_social', 'like', '%'.$buscar.'%')
                ->orWhere('nome_fantasia', 'like', '%'.$buscar.'%')
                ->orWhere('cnpj', 'like', '%'.$buscar.'%')
                ->get();

            return view('admin.usuarios.select_pessoa')
                ->with('listar_pessoas', $lista_pessoas);
            
        }

        $listar_pessoas = Pessoa::all()->sortByDesc("id");

        return view('admin.usuarios.select_pessoa')
            ->with('listar_pessoas', $listar_pessoas);

    }


    public function create($id_pessoa)
    {
        $pessoa = Pessoa::find($id_pessoa);

        if ($pessoa->tipo_pessoa === 'F') {
            
            $usuario = $pessoa->cpf;
            $senha = $this->geraSenha('abefaer', $pessoa->cpf);

        }

        if ($pessoa->tipo_pessoa === 'J') {
            
            $usuario = $pessoa->cnpj;
            $senha = $this->geraSenha('abefaer', $pessoa->cnpj);

        }

        return view('admin.usuarios.create')
            ->with('usuario', $usuario)
            ->with('senha', $senha)
            ->with('id_pessoa', $id_pessoa)
            ->with('pessoa', $pessoa);
    }


    public function store(Request $request)
    {
        $id_pessoa = Request::input('id_pessoa');
        $usuario_login = Request::input('usuario');
        $senha = Hash::make(Request::input('senha'));

        // $validator = Validator::make(
        //     [
        //         'nome' => $nome
        //     ],
        //     [
        //         'nome' => 'required|min:3'
        //     ],
        //     [
        //         'required' => 'O campo ":attribute" é obrigatório.',
        //     ]
        // );

        // if ($validator->fails()) {

        //     return redirect()->action('Admin\EntidadesController@create')->withErrors($validator)->withInput();

        // }
        
        User::create([
            'id_pessoa' => $id_pessoa,
            'username'   => $usuario_login,
            'password'     => $senha
        ]);

        return redirect()->action('Admin\UsuariosController@index')
            ->withInput();
    }



    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        // $lista_entidade = Entidade::find($id);

        // if (empty($lista_entidade)) {
            
        //     return redirect()->action('Admin\EntidadesController@index');

        // } else {

        //     return view('admin.entidades.edit')->with('lista_entidade', $lista_entidade);

        // }  
    }


    public function update(Request $request, $id)
    {
        // $nome = Request::input('entidadeNome');

        // $validator = Validator::make(
        //     [
        //         'nome' => $nome
        //     ],
        //     [
        //         'nome' => 'required|min:3'
        //     ],
        //     [
        //         'required' => 'O campo ":attribute" é obrigatório.',
        //     ]
        // );

        // if ($validator->fails()) {

        //     return redirect()->action('Admin\EntidadesController@edit', $id)->withErrors($validator)->withInput();

        // }

        // $entidade = Entidade::find($id);
        // $entidade->nome = $nome;
        // $entidade->save();

        // return redirect()->action('Admin\EntidadesController@index')->withInput();
    }


    public function destroy($id)
    {
        // Entidade::find($id)->delete();

        // return redirect()->action('Admin\EntidadesController@index');
    }

    public function geraSenha($palavra, $documento)
    {
        return $palavra.substr($documento, 0, 6);
    }
}
