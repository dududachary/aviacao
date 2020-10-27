@extends('admin.template')

@section('titulo')
    <span>Cadastro de Pessoa Física</span>   
@endsection

@section('botao')

@endsection

@section('conteudo')

    @if ( count($errors) > 0)
        <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert">&times;</button>

            <ul class="errors">
                @foreach ($errors->all() as $error)
                    <li><i class="fas fa-exclamation-circle text-danger"></i> - {{ $error }}</li>
                @endforeach
            </ul>

        </div>
    @endif

<form action="{{ action('Admin\PessoasController@store') }}" method="POST">
    <input type="hidden" name="create" value="create">
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

                        @error('nome_pessoal')
                            <i class="fas fa-exclamation-circle text-danger"></i>
                        @enderror

                        <label for="nome_pessoal" class="obrigatorio">Nome Pessoal</label>
                            <input id="nome_pessoal"
                                name="nome_pessoal"
                                type="text" class="form-control" 
                                placeholder="Digite o nome pessoal aqui..."
                                value="{{old('nome_pessoal')}}"
                            >                                    
                    </div>
                    <div class="col-6">
                        <label for="nome_social">Nome Social</label>
                            <input id="nome_social"
                                name="nome_social"
                                type="text" class="form-control" 
                                placeholder="Digite o nome social aqui..."
                                value="{{old('nome_social')}}"
                            >                                    
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="form-row">
                    <div class="col-5">

                        @error('nome_pai')
                            <i class="fas fa-exclamation-circle text-danger"></i>
                        @enderror

                        <label for="nome_pai">Nome do Pai</label>
                            <input id="nome_pai"
                                name="nome_pai"
                                type="text" class="form-control" 
                                placeholder="Digite o nome do pai aqui..."
                                value="{{old('nome_pai')}}"
                            >                                    
                    </div>
                    <div class="col-5">

                        @error('nome_mae')
                            <i class="fas fa-exclamation-circle text-danger"></i>
                        @enderror

                        <label for="nome_mae">Nome da Mãe</label>
                            <input id="nome_mae"
                                name="nome_mae"
                                type="text" class="form-control" 
                                placeholder="Digite o nome da mãe aqui..."
                                value="{{old('nome_mae')}}"
                            >                                    
                    </div>
                    <div class="col-2">

                        @error('dt_nascimento')
                            <i class="fas fa-exclamation-circle text-danger"></i>
                        @enderror

                        <label for="dt_nascimento" class="obrigatorio">Nascimento</label>
                            <input id="dt_nascimento"
                                name="dt_nascimento"
                                type="text" class="form-control" 
                                placeholder="Ex.: dd/mm/aaaa"
                                value="{{old('dt_nascimento')}}"
                            >                                    
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="form-row">
                    <div class="col-6">

                        @error('sinais_particulares')
                            <i class="fas fa-exclamation-circle text-danger"></i>
                        @enderror

                        <label for="sinais_particulares">Sinais Particulares</label>
                            <input id="sinais_particulares"
                                name="sinais_particulares"
                                type="text" class="form-control" 
                                placeholder="Informe os sinais particulares aqui..."
                                value="{{old('sinais_particulares')}}"
                            >                                    
                    </div>
                    <div class="col-2">

                        @error('sexo')
                            <i class="fas fa-exclamation-circle text-danger"></i>
                        @enderror

                        <label for="sexo">Sexo</label>
                        <select id="sexo" 
                            name="sexo"
                            class="form-control">
                            
                            @if (old('sexo'))
                                <option value="{{old('sexo')}}">{{old('sexo')}}</option>
                            @endif

                            <option value="Não Informado">Não informado</option>
                            <option value="Masculino">Masculino</option>
                            <option value="Feminino">Feminino</option>
                            <option value="Personalizado">Personalizado</option>
                        </select>                             
                    </div>
                    <div class="col-4">

                        @error('escolaridade')
                            <i class="fas fa-exclamation-circle text-danger"></i>
                        @enderror

                        <label for="escolaridade">Escolaridade</label>
                        <select id="escolaridade" 
                            name="escolaridade"
                            class="form-control">

                            @if (old('escolaridade'))
                                <option value="{{old('escolaridade')}}">{{old('escolaridade')}}</option>
                            @endif

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

                        @error('tp_sangue')
                            <i class="fas fa-exclamation-circle text-danger"></i>
                        @enderror

                        <label for="tp_sangue">Tipo Sanguíneo</label>
                        <select id="tp_sangue" 
                            name="tp_sangue"
                            class="form-control">

                            @if (old('escolaridade'))
                                <option value="{{old('escolaridade')}}">{{old('escolaridade')}}</option>
                            @endif

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

                        @error('cpf')
                            <i class="fas fa-exclamation-circle text-danger"></i>
                        @enderror

                        <label for="cpf" class="obrigatorio">CPF</label>
                            <input id="cpf"
                                name="cpf"
                                type="text" class="form-control" 
                                placeholder="Somente números..."
                                value="{{ old('cpf')}}"
                            >                                    
                    </div>
                    <div class="col-2">

                        @error('identidade')
                            <i class="fas fa-exclamation-circle text-danger"></i>
                        @enderror

                        <label for="identidade">Identidade</label>
                            <input id="identidade"
                                name="identidade"
                                type="text" class="form-control" 
                                placeholder="Informe a Identidade aqui..."
                                value="{{old('identidade')}}"
                            >                                    
                    </div>
                    <div class="col-2">

                        @error('orgao_expeditor')
                            <i class="fas fa-exclamation-circle text-danger"></i>
                        @enderror

                        <label for="orgao_expeditor">Orgão Expeditor</label>
                            <input id="orgao_expeditor"
                                name="orgao_expeditor"
                                type="text" class="form-control" 
                                placeholder="Informe o orgão expeditor aqui..."
                                value="{{old('orgao_expeditor')}}"
                            >                                    
                    </div>
                    <div class="col-2">

                        @error('titulo_eleitor')
                            <i class="fas fa-exclamation-circle text-danger"></i>
                        @enderror

                        <label for="titulo_eleitor">Título de Eleitor</label>
                            <input id="titulo_eleitor"
                                name="titulo_eleitor"
                                type="text" class="form-control" 
                                placeholder="Informe o titulo de eleitor aqui..."
                                value="{{old('titulo_eleitor')}}"
                            >                                    
                    </div>
                    <div class="col-2">

                        @error('certificado_militar')
                            <i class="fas fa-exclamation-circle text-danger"></i>
                        @enderror

                        <label for="certificado_militar">Certificado Militar</label>
                            <input id="certificado_militar"
                                name="certificado_militar"
                                type="text" class="form-control" 
                                placeholder="Informe o certificado militar aqui..."
                                value="{{old('certificado_militar')}}"
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

                        <label for="logradouro" class="obrigatorio">Logradouro</label>
                            <input id="logradouro"
                                name="logradouro"
                                type="text" class="form-control" 
                                placeholder="Digite o nome do logradouro aqui..."
                                value="{{old('logradouro')}}"
                            >                                    
                    </div>
                    <div class="col-4">

                        @error('numero')
                            <i class="fas fa-exclamation-circle text-danger"></i>
                        @enderror

                        <label for="numero" class="obrigatorio">Número</label>
                            <input id="numero"
                                name="numero"
                                type="text" class="form-control" 
                                placeholder="Digite o numero aqui..."
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
                                placeholder="Digite o nome do bairro aqui..."
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

                        <label for="cidade" class="obrigatorio">Cidade</label>
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

                        <label for="estado" class="obrigatorio">Estado</label>
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

                        <label for="cep" class="obrigatorio">CEP</label>
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

                        <label for="email" class="obrigatorio">E-mail</label>
                            <input id="email"
                                name="email"
                                type="text" class="form-control" 
                                placeholder="Informe o e-mail aqui..."
                                value="{{old('email')}}"
                            >                                    
                    </div>
                    <div class="col-3">

                        @error('fone_residencial')
                            <i class="fas fa-exclamation-circle text-danger"></i>
                        @enderror

                        <label for="fone_residencial">Telefone Residencial</label>
                            <input id="fone_residencial"
                                name="fone_residencial"
                                type="text" class="form-control" 
                                placeholder="Informe o telefone aqui..."
                                value="{{old('fone_residencial')}}"
                            >                                    
                    </div>
                    <div class="col-3">

                        @error('fone_celular')
                            <i class="fas fa-exclamation-circle text-danger"></i>
                        @enderror

                        <label for="fone_celular" class="obrigatorio">Telefone Celular</label>
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
                    <div class="col-3">

                        @error('relacionamento')
                            <i class="fas fa-exclamation-circle text-danger"></i>
                        @enderror

                        <label for="relacionamento" class="obrigatorio">Relacionamento</label>
                        <select id="relacionamento" 
                            name="relacionamento"
                            class="form-control">

                            @if (old('relacionamento'))
                                <option value="{{old('relacionamento')}}">{{old('relacionamento')}}</option>
                            @endif

                            <option value="Proposta de Sociedade">Proposta de Sociedade</option>
                            <option value="Sócio Inativo">Sócio Inativo</option>
                            <option value="Sócio Ativo">Sócio Ativo</option>
                            <option value="Parceiro">Parceiro</option>
                        </select>                             
                    </div>
                    <div class="col-3">

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
                    <div class="col-3">

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
                    <div class="col-3">
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

                        @error('observacoes')
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
            <div class="form-group">
                <div class="form-row">
                    <div class="col-3">
                        
                        @error('id_entidade')
                            <i class="fas fa-exclamation-circle text-danger"></i>
                        @enderror

                        <label for="id_entidade" class="obrigatorio">Entidade Reponsável</label>
                        <select id="id_entidade" 
                            name="id_entidade"
                            class="form-control">
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