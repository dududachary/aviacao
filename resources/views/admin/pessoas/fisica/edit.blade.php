@extends('admin.template')

@section('titulo')
    <span>Editar Pessoa Física</span>   
@endsection

@section('botao')

@endsection

@section('conteudo')

    {{-- @if ( count($errors) > 0)
        <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert">&times;</button>

            <ul class="errors">
                @foreach ($errors->all() as $error)
                    <li><i class="fas fa-exclamation-circle"></i> - {{ $error }}</li>
                @endforeach
            </ul>

        </div>
    @endif --}}

    <form action="{{ action('Admin\PessoasController@update', $lista_pessoa->id) }}" method="POST">
        <input type="hidden" name="create" value="edit">
        <input type="hidden" name="_token" value="{{{ csrf_token() }}}">
        <input type="hidden" name="tipo_pessoa" value="F">
    
        <div class="card mb-3">
            <div class="card-header">
                <i class="fas fa-user-edit"></i> <b>Informações Pessoais</b>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-6">
                            <label for="nome_pessoal">Nome Pessoal</label>
                                <input id="nome_pessoal"
                                    name="nome_pessoal"
                                    type="text" class="form-control" 
                                    placeholder="Digite o nome pessoal aqui..."
                                    value="{{ $lista_pessoa->nome_pessoal }}"
                                >                                    
                        </div>
                        <div class="col-6">
                            <label for="nome_social">Nome Social</label>
                                <input id="nome_social"
                                    name="nome_social"
                                    type="text" class="form-control" 
                                    placeholder="Digite o nome social aqui..."
                                    value="{{ $lista_pessoa->nome_social }}"
                                >                                    
                        </div>
                    </div>
                </div>
    
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-5">
                            <label for="nome_pai">Nome do Pai</label>
                                <input id="nome_pai"
                                    name="nome_pai"
                                    type="text" class="form-control" 
                                    placeholder="Digite o nome do pai aqui..."
                                    value="{{ $lista_pessoa->nome_pai }}"
                                >                                    
                        </div>
                        <div class="col-5">
                            <label for="nome_mae">Nome da Mãe</label>
                                <input id="nome_mae"
                                    name="nome_mae"
                                    type="text" class="form-control" 
                                    placeholder="Digite o nome da mãe aqui..."
                                    value="{{ $lista_pessoa->nome_mae }}"
                                >                                    
                        </div>
                        <div class="col-2">
                            <label for="dt_nascimento">Data de Nascimento</label>
                                <input id="dt_nascimento"
                                    name="dt_nascimento"
                                    type="text" class="form-control" 
                                    placeholder="Digite data de nascimento aqui..."
                                    value=""
                                >                                    
                        </div>
                    </div>
                </div>
    
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-6">
                            <label for="sinais_particulares">Sinais Particulares</label>
                                <input id="sinais_particulares"
                                    name="sinais_particulares"
                                    type="text" class="form-control" 
                                    placeholder="Informe os sinais particulares aqui..."
                                    value="{{ $lista_pessoa->sinais_particulares }}"
                                >                                    
                        </div>
                        <div class="col-2">
                            <label for="sexo">Sexo</label>
                            <select id="sexo" 
                                name="sexo"
                                class="form-control">
                                <option value="{{ $lista_pessoa->sexo }}">{{ $lista_pessoa->sexo }}</option>
                                <option value="NA">Não informado</option>
                                <option value="masulino">Masculino</option>
                                <option value="feminino">Feminino</option>
                                <option value="personalizado">Personalizado</option>
                            </select>                             
                        </div>
                        <div class="col-4">
                            <label for="escolaridade">Escolaridade</label>
                            <select id="escolaridade" 
                                name="escolaridade"
                                class="form-control">
                                <option value="{{ $lista_pessoa->escolaridade }}">{{ $lista_pessoa->escolaridade }}</option>
                                <option value="Não Informado">Não Informado</option>
                                <option value="Fundamental - Incompleto">Fundamental - Incompleto</option>
                                <option value="Fundamental - Completo">Fundamental - Completo</option>
                                <option value="édio - Incompleto">Médio - Incompleto</option>
                                <option value="Médio - Completo">Médio - Completo</option>
                                <option value="Superior - Incompleto">Superior - Incompleto</option>
                                <option value="Superior - Completo">Superior - Completo</option>
                                <option value="Pós-graduação (Lato senso) - Incompleto">Pós-graduação (Lato senso) - Incompleto</option>
                                <option value="Pós-graduação (Lato senso) - Completo">Pós-graduação (Lato senso) - Completo</option>
                                <option value="Pós-graduação (Stricto sensu, nível mestrado) - Incompleto">Pós-graduação (Stricto sensu, nível mestrado) - Incompleto</option>
                                <option value="Pós-graduação (Stricto sensu, nível mestrado) - Completo">Pós-graduação (Stricto sensu, nível mestrado) - Completo</option>
                                <option value="Pós-graduação (Stricto sensu, nível doutor) - Incompleto">Pós-graduação (Stricto sensu, nível doutor) - Incompleto</option>
                                <option value="Pós-graduação (Stricto sensu, nível doutor) - Completo12 ">Pós-graduação (Stricto sensu, nível doutor) - Completo</option>
                            </select>                             
                        </div>
                    </div>
                </div>
    
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-2">
                            <label for="tp_sangue">Tipo Sanguíneo</label>
                            <select id="tp_sangue" 
                                name="tp_sangue"
                                class="form-control">
                                <option value="{{ $lista_pessoa->tp_sangue }}">{{ $lista_pessoa->tp_sangue }}</option>
                                <option value="NA">Não Informado</option>
                                <option value="A+">A+</option>
                                <option value="A-">A-</option>
                                <option value="B+">B+</option>
                                <option value="B-">B-</option>
                                <option value="AB+">AB+</option>
                                <option value="AB-">AB-</option>
                                <option value="O+">O+</option>
                                <option value="O-">O-</option>
                            </select>                             
                        </div>
                        <div class="col-2">
                            <label for="cpf">CPF</label>
                                <input id="cpf"
                                    name="cpf"
                                    type="text" class="form-control" 
                                    placeholder="Informe o CPF aqui..."
                                    value="{{ $lista_pessoa->cpf }}"
                                >                                    
                        </div>
                        <div class="col-2">
                            <label for="identidade">Identidade</label>
                                <input id="identidade"
                                    name="identidade"
                                    type="text" class="form-control" 
                                    placeholder="Informe a Identidade aqui..."
                                    value="{{ $lista_pessoa->identidade }}"
                                >                                    
                        </div>
                        <div class="col-2">
                            <label for="orgao_expeditor">Orgão Expeditor</label>
                                <input id="orgao_expeditor"
                                    name="orgao_expeditor"
                                    type="text" class="form-control" 
                                    placeholder="Informe o orgão expeditor aqui..."
                                    value="{{ $lista_pessoa->orgao_expeditor }}"
                                >                                    
                        </div>
                        <div class="col-2">
                            <label for="titulo_eleitor">Título de Eleitor</label>
                                <input id="titulo_eleitor"
                                    name="titulo_eleitor"
                                    type="text" class="form-control" 
                                    placeholder="Informe o titulo de eleitor aqui..."
                                    value="{{ $lista_pessoa->titulo_eleitor }}"
                                >                                    
                        </div>
                        <div class="col-2">
                            <label for="certificado_militar">Certificado Militar</label>
                                <input id="certificado_militar"
                                    name="certificado_militar"
                                    type="text" class="form-control" 
                                    placeholder="Informe o certificado militar aqui..."
                                    value="{{ $lista_pessoa->certificado_militar }}"
                                >                                    
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
        <div class="card mb-3">
            <div class="card-header">
                <i class="fas fa-map-marker-alt"></i> <b>Endereço</b>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-4">
                            <label for="logradouro">Logradouro</label>
                                <input id="logradouro"
                                    name="logradouro"
                                    type="text" class="form-control" 
                                    placeholder="Digite o nome do logradouro aqui..."
                                    value="{{ $lista_pessoa->logradouro }}"
                                >                                    
                        </div>
                        <div class="col-4">
                            <label for="numero">Número</label>
                                <input id="numero"
                                    name="numero"
                                    type="text" class="form-control" 
                                    placeholder="Digite o numero aqui..."
                                    value=""
                                >                                    
                        </div>
                        <div class="col-4">
                            <label for="bairro">Bairro</label>
                                <input id="bairro"
                                    name="bairro"
                                    type="text" class="form-control" 
                                    placeholder="Digite o nome do bairro aqui..."
                                    value="{{ $lista_pessoa->numero }}"
                                >                                    
                        </div>
                    </div>
                </div>
    
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-4">
                            <label for="complemento">Complemento</label>
                                <input id="complemento"
                                    name="complemento"
                                    type="text" class="form-control" 
                                    placeholder="Informe o Complemento aqui..."
                                    value="{{ $lista_pessoa->complemento }}"
                                >                                    
                        </div>
                        <div class="col-3">
                            <label for="cidade">Cidade</label>
                                <input id="cidade"
                                    name="cidade"
                                    type="text" class="form-control" 
                                    placeholder="Informe a Cidade aqui..."
                                    value="{{ $lista_pessoa->cidade }}"
                                >                                    
                        </div>
                        <div class="col-3">
                            <label for="estado">Estado</label>
                            <select id="estado" 
                                name="estado"
                                class="form-control">
                                <option value="{{ $lista_pessoa->estado }}">{{ $lista_pessoa->estado }}</option>
                                <option value="AC">AC - Acre</option>
                                <option value="AL">AL - Alagoas</option>
                                <option value="AP">AP - Amapá</option>
                                <option value="AM">AM - Amazonas</option>
                                <option value="BA">BA - Bahia</option>
                                <option value="CE">CE - Ceará</option>
                                <option value="DF">DF - Distrito Federal</option>
                                <option value="ES">ES - Espírito Santo</option>
                                <option value="GO">GO - Goiás</option>
                                <option value="MA">MA - Maranhão</option>
                                <option value="MT">MT - Mato Grosso</option>
                                <option value="MS">MS - Mato Grosso do Sul</option>
                                <option value="MG">MG - Minas Gerais</option>
                                <option value="PA">PA - Pará</option>
                                <option value="PB">PB - Paraíba</option>
                                <option value="PR">PR - Paraná</option>
                                <option value="PE">PE - Pernambuco</option>
                                <option value="PI">PI - Piauí</option>
                                <option value="RJ">RJ - Rio de Janeiro</option>
                                <option value="RN">RN - Rio Grande do Norte</option>
                                <option value="RS">RS - Rio Grande do Sul</option>
                                <option value="RO">RO - Rondônia</option>
                                <option value="RR">RR - Roraima</option>
                                <option value="SC">SC - Santa Catarina</option>
                                <option value="SP">SP - São Paulo</option>
                                <option value="SE">SE - Sergipe</option>
                                <option value="TO">TO - Tocantins</option>
                            </select>                             
                        </div>
                        <div class="col-2">
                            <label for="cep">CEP</label>
                                <input id="cep"
                                    name="cep"
                                    type="text" class="form-control" 
                                    placeholder="Informe o CEP aqui..."
                                    value="{{ $lista_pessoa->cep }}"
                                >                                    
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
        <div class="card mb-3">
            <div class="card-header">
                <i class="fas fa-at"></i> <b>Contato</b>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-6">
                            <label for="email">E-mail</label>
                                <input id="email"
                                    name="email"
                                    type="text" class="form-control" 
                                    placeholder="Informe o e-mail aqui..."
                                    value="{{ $lista_pessoa->email }}"
                                >                                    
                        </div>
                        <div class="col-3">
                            <label for="fone_residencial">Telefone Residencial</label>
                                <input id="fone_residencial"
                                    name="fone_residencial"
                                    type="text" class="form-control" 
                                    placeholder="Informe o telefone aqui..."
                                    value="{{ $lista_pessoa->fone_residencial }}"
                                >                                    
                        </div>
                        <div class="col-3">
                            <label for="fone_celular">Telefone Celular</label>
                                <input id="fone_celular"
                                    name="fone_celular"
                                    type="text" class="form-control" 
                                    placeholder="Informe o telefone aqui..."
                                    value="{{ $lista_pessoa->fone_celular }}"
                                >                                    
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
        <div class="card mb-3">
            <div class="card-header">
                <i class="fas fa-info-circle"></i> <b>Informações de Sistema</b>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-3">
                            <label for="relacionamento">Relacionamento</label>
                            <select id="relacionamento" 
                                name="relacionamento"
                                class="form-control">
                                <option value="{{ $lista_pessoa->relacionamento }}">{{ $lista_pessoa->relacionamento }}</option>
                                <option value="Proposta de Sociedade">Proposta de Sociedade</option>
                                <option value="Sócio Inativo">Sócio Inativo</option>
                                <option value="Sócio Ativo">Sócio Ativo</option>
                                <option value="Parceiro">Parceiro</option>
                            </select>                             
                        </div>
                        <div class="col-3">
                            <label for="codigo_anac">Código ANAC</label>
                                <input id="codigo_anac"
                                    name="codigo_anac"
                                    type="text" class="form-control" 
                                    placeholder="Informe o código ANAC aqui..."
                                    value="{{ $lista_pessoa->codigo_anac }}"
                                >                                    
                        </div>
                        <div class="col-3">
                            <label for="classe_cma">Classe do CMA</label>
                            <select id="classe_cma" 
                                name="classe_cma"
                                class="form-control">
                                <option value="{{ $lista_pessoa->classe_cma }}">{{ $lista_pessoa->classe_cma }}</option>
                                <option value="N/A">Não Informado</option>
                                <option value="1ª Classe">1ª Classe</option>
                                <option value="2ª Classe">2ª Classe</option>
                                <option value="3ª Classe">3ª Classe</option>
                                <option value="4ª Classe">4ª Classe</option>
                                <option value="5ª Classe">5ª Classe</option>
                            </select>                             
                        </div>
                        <div class="col-3">
                            <label for="validade_cma">Validade do CMA</label>
                                <input id="validade_cma"
                                    name="validade_cma"
                                    type="text" class="form-control" 
                                    placeholder="Informe a validade do CMA aqui..."
                                    value="{{ $lista_pessoa->validade_cma }}"
                                >                                    
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-12">
                            <label for="observacoes_pessoa">Observações</label>
                                <input id="observacoes_pessoa"
                                    name="observacoes_pessoa"
                                    type="text" class="form-control" 
                                    placeholder="Informe alguma observação aqui..."
                                    value="{{ $lista_pessoa->observacoes_pessoa }}"
                                >                                    
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-3">
                            <label for="id_entidade">Entidade Reponsável</label>
                            <select id="id_entidade" 
                                name="id_entidade"
                                class="form-control">
                                <option value="{{ $lista_pessoa->id_entidade }}">{{ $lista_pessoa->id_entidade }}</option>
                                <option value="">Não Informado</option>
    
                                {{-- @foreach ($entidades_select as $entidade)
                                    <option value="{{$entidade->id}}">{{$entidade->nome}}</option>
                                @endforeach --}}
    
                            </select>                             
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
        <a href="{{ url('admin/pessoas/index') }}" type="button" class="btn btn-danger btn-sm">
            <i class="fas fa-sign-out-alt"></i> Fechar
        </a>
        <button type="submit" class="btn btn-primary btn-sm">
            <i class="fas fa-save"></i> Salvar
        </button>
    </form>

@endsection