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
        $inscricao_estadual = Request::input('inscricao_estadual');
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

        $mensagens_erro = array(
            'required' => 'O campo ":attribute" é obrigatório.',
            'date'     => 'O campo ":attribute" deve ser uma data válida',
            'numeric'  => 'O campo ":attribute" deve conter somente números',
            'digits'   => 'O campo ":attribute" deve ter :digits dígitos',
            'alpha'    => 'C campo ":attribute" deve conter somente letras'
        );

        $validator_fisica = Validator::make(
            [
                'nome_pessoal'        => $nome_pessoal,
                'nome_social'         => $nome_social,
                'nome_pai'            => $nome_pai,
                'nome_mae'            => $nome_mae,                
                'dt_nascimento'       => $dt_nascimento,
                'sinais_particulares' => $sinais_particulares,
                'sexo'                => $sexo,
                'escolaridade'        => $escolaridade,
                'tp_sangue'           => $tp_sangue,
                'cpf'                 => $cpf,
                'identidade'          => $identidade,
                'orgao_expeditor'     => $orgao_expeditor,
                'titulo_eleiitor'     => $titulo_eleitor,
                'certificado_militar' => $certificado_militar,
                'logradouro'          => $logradouro,
                'numero'              => $numero,
                'bairro'              => $bairro,
                'complemento'         => $complemento,
                'cidade'              => $cidade,
                'estado'              => $estado,
                'cep'                 => $cep,
                'email'               => $email,
                'fone_residencial'    => $fone_residencial,
                'fone_celular'        => $fone_celular,
                'relacionamento'      => $relacionamento,
                'codigo_anac'         => $codigo_anac,
                'classe_cma'          => $classe_cma,
                'validade_cma'        => $validade_cma,
                'observacoes_pessoa'  => $observacoes_pessoa,
                'id_entidade'         => $id_entidade
            ],
            [
                'nome_pessoal'        => 'required',
                'nome_social'         => 'nullable',
                'nome_pai'            => 'nullable',
                'nome_mae'            => 'nullable', 
                'dt_nascimento'       => 'required|date',
                'sinais_particulares' => 'nullable',
                'sexo'                => 'nullable',
                'escolaridade'        => 'nullable',
                'tp_sangue'           => 'nullable',
                'cpf'                 => 'required|numeric|digits:11',
                'identidade'          => 'nullable|numeric',
                'orgao_expeditor'     => 'nullable|alpha',
                'titulo_eleiitor'     => 'nullable',
                'certificado_militar' => 'nullable',
                'logradouro'          => 'required',
                'numero'              => 'required',
                'bairro'              => 'nullable',
                'complemento'         => 'nullable',
                'cidade'              => 'required',
                'estado'              => 'required',
                'cep'                 => 'required',
                'email'               => 'required',
                'fone_residencial'    => 'nullable',
                'fone_celular'        => 'required',
                'relacionamento'      => 'required',
                'codigo_anac'         => 'nullable',
                'classe_cma'          => 'nullable',
                'validade_cma'        => 'nullable',
                'observacoes_pessoa'  => 'nullable',
                'id_entidade'         => 'required'
            ],
            $mensagens_erro
        );

        $validator_juridica = Validator::make(
            [
                'nome_fantasia'       => $nome_fantasia,
                'razao_social'        => $razao_social,
                'cnpj'                => $cnpj,
                'inscricao_estadual'  => $inscricao_estadual,
                'ramo_atividade'      => $ramo_atividade,
                'logradouro'          => $logradouro,
                'numero'              => $numero,
                'bairro'              => $bairro,
                'complemento'         => $complemento,
                'cidade'              => $cidade,
                'estado'              => $estado,
                'cep'                 => $cep,
                'email'               => $email,
                'fone_comercial'      => $fone_comercial,
                'fone_celular'        => $fone_celular,
                'relacionamento'      => $relacionamento,
                'codigo_anac'         => $codigo_anac,
                'classe_cma'          => $classe_cma,
                'validade_cma'        => $validade_cma,
                'observacoes_pessoa'  => $observacoes_pessoa,
                'id_entidade'         => $id_entidade
            ],
            [
                'nome_fantasia'       => 'required',
                'razao_social'        => 'required',
                'cnpj'                => 'required|numeric||digits:14',
                'inscricao_estadual'  => 'nullable|numeric|digits:9',
                'ramo_atividade'      => 'nullable',
                'logradouro'          => 'required',
                'numero'              => 'required',
                'bairro'              => 'nullable',
                'complemento'         => 'nullable',
                'cidade'              => 'required',
                'estado'              => 'required',
                'cep'                 => 'required',
                'email'               => 'required',
                'fone_comercial'      => 'required',
                'fone_celular'        => 'nullable',
                'relacionamento'      => 'required',
                'codigo_anac'         => 'nullable',
                'classe_cma'          => 'nullable',
                'validade_cma'        => 'nullable',
                'observacoes_pessoa'  => 'nullable',
                'id_entidade'         => 'required'
            ],
            $mensagens_erro
        );


        if ($validator_fisica->fails() && $tipo_pessoa === "F") {

            return redirect()->action('Admin\PessoasController@create', $tipo_pessoa)
                ->withErrors($validator_fisica)
                ->withInput();

        }

        if ($validator_juridica->fails() && $tipo_pessoa === "J") {

            return redirect()->action('Admin\PessoasController@create', $tipo_pessoa)
                ->withErrors($validator_juridica)
                ->withInput();

        }
        
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
        $pessoa->inscricao_estadual = $inscricao_estadual;
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
        $entidade_pessoa = Entidade::find($lista_pessoa->id_entidade);
        $entidades_select = Entidade::all();

        if (empty($lista_pessoa)) {
            
            return redirect()->action('Admin\PessoasController@index');

        } else {

            if ($lista_pessoa->tipo_pessoa === "F") {

                return view('admin.pessoas.fisica.edit')
                    ->with('lista_pessoa', $lista_pessoa)
                    ->with('entidade_pessoa', $entidade_pessoa)
                    ->with('entidades_select', $entidades_select);

            }

            if ($lista_pessoa->tipo_pessoa === "J") {

                return view('admin.pessoas.juridica.edit')
                    ->with('lista_pessoa', $lista_pessoa)
                    ->with('entidade_pessoa', $entidade_pessoa)
                    ->with('entidades_select', $entidades_select);

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
        $inscricao_estadual = Request::input('inscricao_estadual');
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

        $mensagens_erro = array(
            'required' => 'O campo ":attribute" é obrigatório.',
            'date'     => 'O campo ":attribute" deve ser uma data válida',
            'numeric'  => 'O campo ":attribute" deve conter somente números',
            'digits'   => 'O campo ":attribute" deve ter :digits dígitos',
            'alpha'    => 'C campo ":attribute" deve conter somente letras'
        );

        $validator_fisica = Validator::make(
            [
                'nome_pessoal'        => $nome_pessoal,
                'nome_social'         => $nome_social,
                'nome_pai'            => $nome_pai,
                'nome_mae'            => $nome_mae,                
                'dt_nascimento'       => $dt_nascimento,
                'sinais_particulares' => $sinais_particulares,
                'sexo'                => $sexo,
                'escolaridade'        => $escolaridade,
                'tp_sangue'           => $tp_sangue,
                'cpf'                 => $cpf,
                'identidade'          => $identidade,
                'orgao_expeditor'     => $orgao_expeditor,
                'titulo_eleiitor'     => $titulo_eleitor,
                'certificado_militar' => $certificado_militar,
                'logradouro'          => $logradouro,
                'numero'              => $numero,
                'bairro'              => $bairro,
                'complemento'         => $complemento,
                'cidade'              => $cidade,
                'estado'              => $estado,
                'cep'                 => $cep,
                'email'               => $email,
                'fone_residencial'    => $fone_residencial,
                'fone_celular'        => $fone_celular,
                'relacionamento'      => $relacionamento,
                'codigo_anac'         => $codigo_anac,
                'classe_cma'          => $classe_cma,
                'validade_cma'        => $validade_cma,
                'observacoes_pessoa'  => $observacoes_pessoa,
                'id_entidade'         => $id_entidade
            ],
            [
                'nome_pessoal'        => 'required',
                'nome_social'         => 'nullable',
                'nome_pai'            => 'nullable',
                'nome_mae'            => 'nullable', 
                'dt_nascimento'       => 'required|date',
                'sinais_particulares' => 'nullable',
                'sexo'                => 'nullable',
                'escolaridade'        => 'nullable',
                'tp_sangue'           => 'nullable',
                'cpf'                 => 'required|numeric|digits:11',
                'identidade'          => 'nullable|numeric',
                'orgao_expeditor'     => 'nullable|alpha',
                'titulo_eleiitor'     => 'nullable',
                'certificado_militar' => 'nullable',
                'logradouro'          => 'required',
                'numero'              => 'required',
                'bairro'              => 'nullable',
                'complemento'         => 'nullable',
                'cidade'              => 'required',
                'estado'              => 'required',
                'cep'                 => 'required',
                'email'               => 'required',
                'fone_residencial'    => 'nullable',
                'fone_celular'        => 'required',
                'relacionamento'      => 'required',
                'codigo_anac'         => 'nullable',
                'classe_cma'          => 'nullable',
                'validade_cma'        => 'nullable',
                'observacoes_pessoa'  => 'nullable',
                'id_entidade'         => 'required'
            ],
            $mensagens_erro
        );

        $validator_juridica = Validator::make(
            [
                'nome_fantasia'       => $nome_fantasia,
                'razao_social'        => $razao_social,
                'cnpj'                => $cnpj,
                'inscricao_estadual'  => $inscricao_estadual,
                'ramo_atividade'      => $ramo_atividade,
                'logradouro'          => $logradouro,
                'numero'              => $numero,
                'bairro'              => $bairro,
                'complemento'         => $complemento,
                'cidade'              => $cidade,
                'estado'              => $estado,
                'cep'                 => $cep,
                'email'               => $email,
                'fone_comercial'      => $fone_comercial,
                'fone_celular'        => $fone_celular,
                'relacionamento'      => $relacionamento,
                'codigo_anac'         => $codigo_anac,
                'classe_cma'          => $classe_cma,
                'validade_cma'        => $validade_cma,
                'observacoes_pessoa'  => $observacoes_pessoa,
                'id_entidade'         => $id_entidade
            ],
            [
                'nome_fantasia'       => 'required',
                'razao_social'        => 'required',
                'cnpj'                => 'required|numeric||digits:14',
                'inscricao_estadual'  => 'nullable|numeric|digits:9',
                'ramo_atividade'      => 'nullable',
                'logradouro'          => 'required',
                'numero'              => 'required',
                'bairro'              => 'nullable',
                'complemento'         => 'nullable',
                'cidade'              => 'required',
                'estado'              => 'required',
                'cep'                 => 'required',
                'email'               => 'required',
                'fone_comercial'      => 'required',
                'fone_celular'        => 'nullable',
                'relacionamento'      => 'required',
                'codigo_anac'         => 'nullable',
                'classe_cma'          => 'nullable',
                'validade_cma'        => 'nullable',
                'observacoes_pessoa'  => 'nullable',
                'id_entidade'         => 'required'
            ],
            $mensagens_erro
        );

        if ($validator_fisica->fails() && $tipo_pessoa === "F") {

            return redirect()->action('Admin\PessoasController@edit', $id)
                ->withErrors($validator_fisica);

        }

        if ($validator_juridica->fails() && $tipo_pessoa === "J") {

            return redirect()->action('Admin\PessoasController@edit', $id)
                ->withErrors($validator_juridica);

        }

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
        $pessoa->inscricao_estadual = $inscricao_estadual;
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
