<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Request;

use Validator;

use Illuminate\Support\Facades\DB;

use App\Pessoa;

use App\Entidade;

class PessoasController extends Controller
{
    public function index()
    {
        $listar_pessoas = Pessoa::all()->sortByDesc("id");

        return view('admin.pessoas.index')->with('listar_pessoas', $listar_pessoas);
    }

    public function type()
    {
        return view('admin.pessoas.type');
    }


    public function create($type)
    {
        $entidades_select = Entidade::all();

        if ($type === "F") {

            return view('admin.pessoas.fisica.create')->with('entidades_select', $entidades_select);;

        }

        if ($type === "J") {

            return view('admin.pessoas.juridica.create')->with('entidades_select', $entidades_select);;

        }
    }


    public function store(Request $request)
    {
        $tipo_pessoa = Request::input('tipo_pessoa');

        //Pessoa Física
        $nome_pessoal = Request::input('nome_pessoal');
        $nome_social = Request::input('nome_social');
        $nome_pai = Request::input('nome_pai');
        $nome_mae = Request::input('nome_mae');
        $dt_nascimento = Request::input('dt_nascimento');
        $sinais_particulares = Request::input('sinais_particulares');
        $sexo = Request::input('sexo');
        $escolaridade = Request::input('escolaridade');
        $tp_sangue = Request::input('tp_sangue');
        $cpf = Request::input('cpf');
        $identidade = Request::input('identidade');
        $orgao_expeditor = Request::input('orgao_expeditor');
        $titulo_eleitor = Request::input('titulo_eleitor');
        $certificado_militar = Request::input('certificado_militar');

        //Pessoa Juridica
        $nome_fantasia = Request::input('nome_fantasia');
        $razao_social = Request::input('razao_social');
        $cnpj = Request::input('cnpj');
        $inscrição_estadual = Request::input('inscrição_estadual');
        $ramo_atividade = Request::input('ramo_atividade');
        $fone_comercial = Request::input('fone_comercial');
        
        //Endereço
        $logradouro = Request::input('logradouro');
        $numero = Request::input('numero');
        $bairro = Request::input('bairro');
        $complemento = Request::input('complemento');
        $cidade = Request::input('cidade');
        $estado = Request::input('estado');
        $cep = Request::input('cep');

        //Contato
        $email = Request::input('email');
        $fone_residencial = Request::input('fone_residencial');
        $fone_celular = Request::input('fone_celular');

        //Sistema
        $relacionamento = Request::input('relacionamento');
        $codigo_anac = Request::input('codigo_anac');
        $classe_cma = Request::input('classe_cma');
        $validade_cma = Request::input('validade_cma');
        $observacoes_pessoa = Request::input('observacoes_pessoa');
        $id_entidade = Request::input('id_entidade');

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
        
        $pessoa = new Pessoa();

        $pessoa->tipo_pessoa = $tipo_pessoa;

        //Pessoa Física
        $pessoa->nome_pessoal = $nome_pessoal;
        $pessoa->nome_social = $nome_social;
        $pessoa->nome_pai = $nome_pai;
        $pessoa->nome_mae = $nome_mae;
        $pessoa->dt_nascimento = date("Y-m-d", strtotime($dt_nascimento));
        $pessoa->sinais_particulares = $sinais_particulares;
        $pessoa->sexo = $sexo;
        $pessoa->escolaridade = $escolaridade;
        $pessoa->tp_sangue = $tp_sangue;
        $pessoa->cpf = $cpf;
        $pessoa->identidade = $identidade;
        $pessoa->orgao_expeditor = $orgao_expeditor;
        $pessoa->titulo_eleitor = $titulo_eleitor;
        $pessoa->certificado_militar = $certificado_militar;

        //Pessoa Juridica
        $pessoa->nome_fantasia = $nome_fantasia;
        $pessoa->razao_social = $razao_social;
        $pessoa->cnpj = $cnpj;
        $pessoa->inscrição_estadual = $inscrição_estadual;
        $pessoa->ramo_atividade = $ramo_atividade;
        
        //Endereço
        $pessoa->logradouro = $logradouro;
        $pessoa->numero = $numero;
        $pessoa->bairro = $bairro;
        $pessoa->complemento = $complemento;
        $pessoa->cidade = $cidade;
        $pessoa->estado = $estado;
        $pessoa->cep = $cep;

        //Contato
        $pessoa->email = $email;
        $pessoa->fone_residencial = $fone_residencial;
        $pessoa->fone_comercial = $fone_comercial;
        $pessoa->fone_celular = $fone_celular;

        //Sistema
        $pessoa->relacionamento = $relacionamento;
        $pessoa->codigo_anac = $codigo_anac;
        $pessoa->classe_cma = $classe_cma;
        $pessoa->validade_cma = date("Y-m-d", strtotime($validade_cma));
        $pessoa->observacoes_pessoa = $observacoes_pessoa;
        $pessoa->id_entidade = $id_entidade;

        $pessoa->save();

        return redirect()->action('Admin\PessoasController@index')->withInput();
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $lista_pessoa = Pessoa::find($id);

        if (empty($lista_pessoa)) {
            
            return redirect()->action('Admin\PessoasController@index');

        } else {

            if ($lista_pessoa->tipo_pessoa === "F") {

                return view('admin.pessoas.fisica.edit')->with('lista_pessoa', $lista_pessoa);

            }

            if ($lista_pessoa->tipo_pessoa === "J") {

                return view('admin.pessoas.juridica.edit')->with('lista_pessoa', $lista_pessoa);

            }

            

        }   
    }


    public function update(Request $request, $id)
    {

        $tipo_pessoa = Request::input('tipo_pessoa');

        //Pessoa Física
        $nome_pessoal = Request::input('nome_pessoal');
        $nome_social = Request::input('nome_social');
        $nome_pai = Request::input('nome_pai');
        $nome_mae = Request::input('nome_mae');
        $dt_nascimento = Request::input('dt_nascimento');
        $sinais_particulares = Request::input('sinais_particulares');
        $sexo = Request::input('sexo');
        $escolaridade = Request::input('escolaridade');
        $tp_sangue = Request::input('tp_sangue');
        $cpf = Request::input('cpf');
        $identidade = Request::input('identidade');
        $orgao_expeditor = Request::input('orgao_expeditor');
        $titulo_eleitor = Request::input('titulo_eleitor');
        $certificado_militar = Request::input('certificado_militar');

        //Pessoa Juridica
        $nome_fantasia = Request::input('nome_fantasia');
        $razao_social = Request::input('razao_social');
        $cnpj = Request::input('cnpj');
        $inscrição_estadual = Request::input('inscrição_estadual');
        $ramo_atividade = Request::input('ramo_atividade');
        $fone_comercial = Request::input('fone_comercial');
        
        //Endereço
        $logradouro = Request::input('logradouro');
        $numero = Request::input('numero');
        $bairro = Request::input('bairro');
        $complemento = Request::input('complemento');
        $cidade = Request::input('cidade');
        $estado = Request::input('estado');
        $cep = Request::input('cep');

        //Contato
        $email = Request::input('email');
        $fone_residencial = Request::input('fone_residencial');
        $fone_celular = Request::input('fone_celular');

        //Sistema
        $relacionamento = Request::input('relacionamento');
        $codigo_anac = Request::input('codigo_anac');
        $classe_cma = Request::input('classe_cma');
        $validade_cma = Request::input('validade_cma');
        $observacoes_pessoa = Request::input('observacoes_pessoa');
        $id_entidade = Request::input('id_entidade');

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

        $pessoa = Pessoa::find($id);

        $pessoa->tipo_pessoa = $tipo_pessoa;

        //Pessoa Física
        $pessoa->nome_pessoal = $nome_pessoal;
        $pessoa->nome_social = $nome_social;
        $pessoa->nome_pai = $nome_pai;
        $pessoa->nome_mae = $nome_mae;
        $pessoa->dt_nascimento = date("Y-m-d", strtotime($dt_nascimento));
        $pessoa->sinais_particulares = $sinais_particulares;
        $pessoa->sexo = $sexo;
        $pessoa->escolaridade = $escolaridade;
        $pessoa->tp_sangue = $tp_sangue;
        $pessoa->cpf = $cpf;
        $pessoa->identidade = $identidade;
        $pessoa->orgao_expeditor = $orgao_expeditor;
        $pessoa->titulo_eleitor = $titulo_eleitor;
        $pessoa->certificado_militar = $certificado_militar;

        //Pessoa Juridica
        $pessoa->nome_fantasia = $nome_fantasia;
        $pessoa->razao_social = $razao_social;
        $pessoa->cnpj = $cnpj;
        $pessoa->inscrição_estadual = $inscrição_estadual;
        $pessoa->ramo_atividade = $ramo_atividade;
        
        //Endereço
        $pessoa->logradouro = $logradouro;
        $pessoa->numero = $numero;
        $pessoa->bairro = $bairro;
        $pessoa->complemento = $complemento;
        $pessoa->cidade = $cidade;
        $pessoa->estado = $estado;
        $pessoa->cep = $cep;

        //Contato
        $pessoa->email = $email;
        $pessoa->fone_residencial = $fone_residencial;
        $pessoa->fone_comercial = $fone_comercial;
        $pessoa->fone_celular = $fone_celular;

        //Sistema
        $pessoa->relacionamento = $relacionamento;
        $pessoa->codigo_anac = $codigo_anac;
        $pessoa->classe_cma = $classe_cma;
        $pessoa->validade_cma = date("Y-m-d", strtotime($validade_cma));
        $pessoa->observacoes_pessoa = $observacoes_pessoa;
        $pessoa->id_entidade = $id_entidade;

        $pessoa->save();

        return redirect()->action('Admin\PessoasController@index')->withInput();
    }


    public function destroy($id)
    {
        Pessoa::find($id)->delete();

        return redirect()->action('Admin\PessoasController@index');
    }
}
