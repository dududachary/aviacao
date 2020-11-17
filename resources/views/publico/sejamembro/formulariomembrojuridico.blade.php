@extends('publico.template')

@section('conteudo')
    <div class="p-4">
        @if ( count($errors) > 0)
            <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert">&times;</button>

                <ul class="errors">
                    @foreach ($errors->all() as $error)
                        <li><i class="fas fa-exclamation-circle"></i> - {{ $error }}</li>
                    @endforeach
                </ul>

            </div>
        @endif

        <form action="{{ action('Publico\SejaMembroController@store') }}" method="POST">
            <input type="hidden" name="create" value="create">
        <input type="hidden" name="_token" value="{{{ csrf_token() }}}">
        <input type="hidden" name="tipo_pessoa" value="J">
        <input type="hidden" name="id_entidade" id="id_entidade" value="1">
        <input type="hidden" name="relacionamento" id="relacionamento" value="Proposta de Sociedade (Site)">

            <div class="card mb-3">
                <div class="card-header">
                    <i class="fas fa-building"></i> <b>Informações Empresariais (Pessoa Jurídica)</b>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col-6">

                                @error('nome_fantasia')
                                    <i class="fas fa-exclamation-circle text-danger"></i>
                                @enderror

                                <label for="nome_fantasia">Nome Fantasia</label>
                                    <input id="nome_fantasia"
                                        name="nome_fantasia"
                                        type="text" class="form-control" 
                                        placeholder="Informe o nome fantasia aqui..."
                                        value="{{old('nome_fantasia')}}"
                                    >                                    
                            </div>
                            <div class="col-6">
                                
                                @error('razao_social')
                                    <i class="fas fa-exclamation-circle text-danger"></i>
                                @enderror

                                <label for="razao_social">Razão Social</label>
                                    <input id="razao_social"
                                        name="razao_social"
                                        type="text" class="form-control" 
                                        placeholder="'Informe' a razão social aqui..."
                                        value="{{old('razao_social')}}"
                                    >                                    
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="form-row">
                            <div class="col-4">

                                @error('cnpj')
                                    <i class="fas fa-exclamation-circle text-danger"></i>
                                @enderror

                                <label for="cnpj">CNPJ</label>
                                    <input id="cnpj"
                                        name="cnpj"
                                        type="text" class="form-control" 
                                        class="form-control-plaintext"
                                        readonly
                                        value="{{ isset($documento) ? $documento : old('cpf')}}"
                                    >                                    
                            </div>
                            <div class="col-4">

                                @error('inscricao_estadual')
                                    <i class="fas fa-exclamation-circle text-danger"></i>
                                @enderror

                                <label for="inscricao_estadual">Inscrição Estadual</label>
                                    <input id="inscricao_estadual"
                                        name="inscricao_estadual"
                                        type="text" class="form-control" 
                                        placeholder="Informe a inscrição estadual aqui..."
                                        value="{{old('inscricao_estadual')}}"
                                    >                                    
                            </div>
                            <div class="col-4">

                                @error('ramo_atividade')
                                    <i class="fas fa-exclamation-circle text-danger"></i>
                                @enderror

                                <label for="ramo_atividade">Ramo de Atividade</label>
                                    <input id="ramo_atividade"
                                        name="ramo_atividade"
                                        type="text" class="form-control" 
                                        placeholder="Informe o ramo de atividade aqui..."
                                        value="{{old('ramo_atividade')}}"
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

                                @error('logradouro')
                                    <i class="fas fa-exclamation-circle text-danger"></i>
                                @enderror

                                <label for="logradouro">Logradouro</label>
                                    <input id="logradouro"
                                        name="logradouro"
                                        type="text" class="form-control" 
                                        placeholder="Informe o nome do logradouro aqui..."
                                        value="{{old('logradouro')}}"
                                    >                                    
                            </div>
                            <div class="col-4">

                                @error('numero')
                                    <i class="fas fa-exclamation-circle text-danger"></i>
                                @enderror

                                <label for="numero">Número</label>
                                    <input id="numero"
                                        name="numero"
                                        type="text" class="form-control" 
                                        placeholder="Informe o numero aqui..."
                                        value="{{old('numero')}}"
                                    >                                    
                            </div>
                            <div class="col-4">

                                @error('bairro')
                                    <i class="fas fa-exclamation-circle text-danger"></i>
                                @enderror

                                <label for="bairro">Bairro</label>
                                    <input id="bairro"
                                        name="bairro"
                                        type="text" class="form-control" 
                                        placeholder="Informe o nome do bairro aqui..."
                                        value="{{old('bairro')}}"
                                    >                                    
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="form-row">
                            <div class="col-4">

                                @error('complemento')
                                    <i class="fas fa-exclamation-circle text-danger"></i>
                                @enderror

                                <label for="complemento">Complemento</label>
                                    <input id="complemento"
                                        name="complemento"
                                        type="text" class="form-control" 
                                        placeholder="Informe o Complemento aqui..."
                                        value="{{old('complemento')}}"
                                    >                                    
                            </div>
                            <div class="col-3">

                                @error('cidade')
                                    <i class="fas fa-exclamation-circle text-danger"></i>
                                @enderror

                                <label for="cidade">Cidade</label>
                                    <input id="cidade"
                                        name="cidade"
                                        type="text" class="form-control" 
                                        placeholder="Informe a Cidade aqui..."
                                        value="{{old('cidade')}}"
                                    >                                    
                            </div>
                            <div class="col-3">

                                @error('estado')
                                    <i class="fas fa-exclamation-circle text-danger"></i>
                                @enderror

                                <label for="estado">Estado</label>
                                <select id="estado" 
                                    name="estado"
                                    class="form-control">

                                    @if (old('estado'))
                                        <option value="{{old('estado')}}">{{old('estado')}}</option>
                                    @endif

                                    <option value="">Não Informado</option>
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

                                @error('cep')
                                    <i class="fas fa-exclamation-circle text-danger"></i>
                                @enderror

                                <label for="cep">CEP</label>
                                    <input id="cep"
                                        name="cep"
                                        type="text" class="form-control" 
                                        placeholder="Informe o CEP aqui..."
                                        value="{{old('cep')}}"
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

                                @error('email')
                                    <i class="fas fa-exclamation-circle text-danger"></i>
                                @enderror

                                <label for="email">E-mail</label>
                                    <input id="email"
                                        name="email"
                                        type="text" class="form-control" 
                                        placeholder="Informe o e-mail aqui..."
                                        value="{{old('email')}}"
                                    >                                    
                            </div>
                            <div class="col-3">

                                @error('fone_comercial')
                                    <i class="fas fa-exclamation-circle text-danger"></i>
                                @enderror

                                <label for="fone_comercial">Telefone Comercial</label>
                                    <input id="fone_comercial"
                                        name="fone_comercial"
                                        type="text" class="form-control" 
                                        placeholder="Informe o telefone aqui..."
                                        value="{{old('fone_comercial')}}"
                                    >                                    
                            </div>
                            <div class="col-3">

                                @error('fone_celular')
                                    <i class="fas fa-exclamation-circle text-danger"></i>
                                @enderror

                                <label for="fone_celular">Telefone Celular</label>
                                    <input id="fone_celular"
                                        name="fone_celular"
                                        type="text" class="form-control" 
                                        placeholder="Informe o telefone aqui..."
                                        value="{{old('fone_celular')}}"
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
                            <div class="col-4">

                                @error('codigo_anac')
                                    <i class="fas fa-exclamation-circle text-danger"></i>
                                @enderror

                                <label for="codigo_anac">Código ANAC</label>
                                    <input id="codigo_anac"
                                        name="codigo_anac"
                                        type="text" class="form-control" 
                                        placeholder="Informe o código ANAC aqui..."
                                        value="{{old('codigo_anac')}}"
                                    >                                    
                            </div>
                            <div class="col-4">

                                @error('classe_cma')
                                    <i class="fas fa-exclamation-circle text-danger"></i>
                                @enderror

                                <label for="classe_cma">Classe do CMA</label>
                                <select id="classe_cma" 
                                    name="classe_cma"
                                    class="form-control">

                                    @if (old('classe_cma'))
                                        <option value="{{old('classe_cma')}}">{{old('classe_cma')}}</option>
                                    @endif

                                    <option value="Não Informado">Não Informado</option>
                                    <option value="1ª Classe">1ª Classe</option>
                                    <option value="2ª Classe">2ª Classe</option>
                                    <option value="3ª Classe">3ª Classe</option>
                                    <option value="4ª Classe">4ª Classe</option>
                                    <option value="5ª Classe">5ª Classe</option>
                                </select>                             
                            </div>
                            <div class="col-4">

                                @error('validade_cma')
                                    <i class="fas fa-exclamation-circle text-danger"></i>
                                @enderror

                                <label for="validade_cma">Validade do CMA</label>
                                    <input id="validade_cma"
                                        name="validade_cma"
                                        type="text" class="form-control" 
                                        placeholder="Informe a validade do CMA aqui..."
                                        value="{{old('validade_cma')}}"
                                    >                                    
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col-12">

                                @error('observacoes_pessoa')
                                    <i class="fas fa-exclamation-circle text-danger"></i>
                                @enderror

                                <label for="observacoes_pessoa">Observações</label>
                                    <input id="observacoes_pessoa"
                                        name="observacoes_pessoa"
                                        type="text" class="form-control" 
                                        placeholder="Informe alguma observação aqui..."
                                        value="{{old('observacoes_pessoa')}}"
                                    >                                    
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <a href="{{ route('inicial') }}" type="button" class="btn btn-danger btn-sm">
                <i class="fas fa-sign-out-alt"></i> Fechar
            </a>
            <button type="submit" class="btn btn-primary btn-sm">
                <i class="fas fa-share"></i> Enviar Formulário de Proposta
            </button>
        </form>
    </div>
@endsection