@extends('admin.template')

@section('titulo')
    <span>Editar Pessoa Jurídica</span>   
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
        <input type="hidden" name="edit" value="edit">
        <input type="hidden" name="_token" value="{{{ csrf_token() }}}">
        <input type="hidden" name="tipo_pessoa" value="J">
    
        <div class="card mb-3">
            <div class="card-header">
                <i class="fas fa-building"></i> <b>Informações Empresariais</b>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-6">
                            <label for="nome_fantasia">Nome Fantasia</label>
                                <input id="nome_fantasia"
                                    name="nome_fantasia"
                                    type="text" class="form-control" 
                                    placeholder="Informe o nome fantasia aqui..."
                                    value="{{ $lista_pessoa->nome_fantasia }}"
                                >                                    
                        </div>
                        <div class="col-6">
                            <label for="razao_social">Razão Social</label>
                                <input id="razao_social"
                                    name="razao_social"
                                    type="text" class="form-control" 
                                    placeholder="'Informe' a razão social aqui..."
                                    value="{{ $lista_pessoa->razao_social }}"
                                >                                    
                        </div>
                    </div>
                </div>
    
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-4">
                            <label for="cnpj">CNPJ</label>
                                <input id="cnpj"
                                    name="cnpj"
                                    type="text" class="form-control" 
                                    placeholder="Informe o CNPJ aqui..."
                                    value="{{ $lista_pessoa->cnpj }}"
                                >                                    
                        </div>
                        <div class="col-4">
                            <label for="inscrição_estadual">Inscrição Estadual</label>
                                <input id="inscrição_estadual"
                                    name="inscrição_estadual"
                                    type="text" class="form-control" 
                                    placeholder="Informe a inscrição estadual aqui..."
                                    value="{{ $lista_pessoa->inscricao_estadual }}"
                                >                                    
                        </div>
                        <div class="col-4">
                            <label for="ramo_atividade">Ramo de Atividade</label>
                                <input id="ramo_atividade"
                                    name="ramo_atividade"
                                    type="text" class="form-control" 
                                    placeholder="Informe o ramo de atividade aqui..."
                                    value="{{ $lista_pessoa->ramo_atividade }}"
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
                                    placeholder="Informe o nome do logradouro aqui..."
                                    value="{{ $lista_pessoa->logradouro }}"
                                >                                    
                        </div>
                        <div class="col-4">
                            <label for="numero">Número</label>
                                <input id="numero"
                                    name="numero"
                                    type="text" class="form-control" 
                                    placeholder="Informe o numero aqui..."
                                    value="{{ $lista_pessoa->numero }}"
                                >                                    
                        </div>
                        <div class="col-4">
                            <label for="bairro">Bairro</label>
                                <input id="bairro"
                                    name="bairro"
                                    type="text" class="form-control" 
                                    placeholder="Informe o nome do bairro aqui..."
                                    value="{{ $lista_pessoa->bairro }}"
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
                                <option value="{{ $lista_pessoa->estado }}" class="bg-info">{{ $lista_pessoa->estado }}</option>
                                <option value="Não Informado">Não Informado</option>
                                <option value="AC - Acre">AC - Acre</option>
                                <option value="AL - Alagoas">AL - Alagoas</option>
                                <option value="AP - Amapá">AP - Amapá</option>
                                <option value="AM - Amazonas">AM - Amazonas</option>
                                <option value="BA - Bahia">BA - Bahia</option>
                                <option value="CE - Ceará">CE - Ceará</option>
                                <option value="DF - Distrito Federal">DF - Distrito Federal</option>
                                <option value="ES - Espírito Santo">ES - Espírito Santo</option>
                                <option value="GO - Goiás">GO - Goiás</option>
                                <option value="MA - Maranhão">MA - Maranhão</option>
                                <option value="MT - Mato Grosso">MT - Mato Grosso</option>
                                <option value="MS - Mato Grosso do Sul">MS - Mato Grosso do Sul</option>
                                <option value="MG - Minas Gerais">MG - Minas Gerais</option>
                                <option value="PA - Pará">PA - Pará</option>
                                <option value="PB - Paraíba">PB - Paraíba</option>
                                <option value="PR - Paraná">PR - Paraná</option>
                                <option value="PE - Pernambuco">PE - Pernambuco</option>
                                <option value="PI - Piauí">PI - Piauí</option>
                                <option value="RJ - Rio de Janeiro">RJ - Rio de Janeiro</option>
                                <option value="RN - Rio Grande do Norte">RN - Rio Grande do Norte</option>
                                <option value="RS - Rio Grande do Sul">RS - Rio Grande do Sul</option>
                                <option value="RO - Rondônia">RO - Rondônia</option>
                                <option value="RR - Roraima">RR - Roraima</option>
                                <option value="SC - Santa Catarina">SC - Santa Catarina</option>
                                <option value="SP - São Paulo">SP - São Paulo</option>
                                <option value="SE - Sergipe">SE - Sergipe</option>
                                <option value="TO - Tocantins">TO - Tocantins</option>
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
                            <label for="fone_comercial">Telefone Comercial</label>
                                <input id="fone_comercial"
                                    name="fone_comercial"
                                    type="text" class="form-control" 
                                    placeholder="Informe o telefone aqui..."
                                    value="{{ $lista_pessoa->fone_comercial }}"
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
                                <option value="{{ $lista_pessoa->relacionamento }}" class="bg-info">{{ $lista_pessoa->relacionamento }}</option>
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
                                <option value="{{ $lista_pessoa->classe_cma }}" class="bg-info">{{ $lista_pessoa->classe_cma }}</option>
                                <option value="Não Informado">Não Informado</option>
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
                                <option value="{{ $lista_pessoa->id_entidade }}" class="bg-info">{{ $entidade_pessoa->nome }}</option>
                                <option value="">Não Informado</option>
    
                                @foreach ($entidades_select as $entidade)
                                    <option value="{{$entidade->id}}">{{$entidade->nome}}</option>
                                @endforeach
    
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