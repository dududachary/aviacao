@extends('admin.template')

@section('titulo')
    <span>cadastro de Pessoa Jurídica</span>   
@endsection

@section('botao')

@endsection

@section('conteudo')
<form action="" method="POST">
    <input type="hidden" name="create" value="create">
    <input type="hidden" name="_token" value="{{{ csrf_token() }}}">

    <div class="card mb-3">
        <div class="card-header">
            <i class="fas fa-building"></i> <b>Informações Empresariais</b>
        </div>
        <div class="card-body">
            <div class="form-group">
                <div class="form-row">
                    <div class="col-2">
                        <label for="catogoria">Categoria</label>
                        <select id="catogoria" 
                            name="catogoria"
                            class="form-control">
                            <option value="Geral">Geral</option>
                            <option value="Sócio">Sócio</option>
                            <option value="Representante">Representante</option>
                        </select>                             
                    </div>
                    <div class="col-5">
                        <label for="nome_fantasia">Nome Fantasia</label>
                            <input id="nome_fantasia"
                                name="nome_fantasia"
                                type="text" class="form-control" 
                                placeholder="Digite o nome fantasia aqui..."
                                value=""
                            >                                    
                    </div>
                    <div class="col-5">
                        <label for="razao_social">Razão Social</label>
                            <input id="razao_social"
                                name="razao_social"
                                type="text" class="form-control" 
                                placeholder="Digite a razão social aqui..."
                                value=""
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
                                placeholder="Digite o CNPJ aqui..."
                                value=""
                            >                                    
                    </div>
                    <div class="col-4">
                        <label for="inscrição_estadual">Inscrição Estadual</label>
                            <input id="inscrição_estadual"
                                name="inscrição_estadual"
                                type="text" class="form-control" 
                                placeholder="Informe a inscrição estadual aqui..."
                                value=""
                            >                                    
                    </div>
                    <div class="col-4">
                        <label for="ramo_atividade">Ramo de Atividade</label>
                            <input id="ramo_atividade"
                                name="ramo_atividade"
                                type="text" class="form-control" 
                                placeholder="Informe o ramo de atividade aqui..."
                                value=""
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
                                value=""
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
                                value=""
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
                                value=""
                            >                                    
                    </div>
                    <div class="col-3">
                        <label for="cidade">Cidade</label>
                            <input id="cidade"
                                name="cidade"
                                type="text" class="form-control" 
                                placeholder="Informe a Cidade aqui..."
                                value=""
                            >                                    
                    </div>
                    <div class="col-3">
                        <label for="estado">Estado</label>
                        <select id="estado" 
                            name="estado"
                            class="form-control">
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
                                value=""
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
                                value=""
                            >                                    
                    </div>
                    <div class="col-3">
                        <label for="fone_residencial">Telefone Comercial</label>
                            <input id="fone_residencial"
                                name="fone_residencial"
                                type="text" class="form-control" 
                                placeholder="Informe o telefone aqui..."
                                value=""
                            >                                    
                    </div>
                    <div class="col-3">
                        <label for="fone_celular">Telefone Celular</label>
                            <input id="fone_celular"
                                name="fone_celular"
                                type="text" class="form-control" 
                                placeholder="Informe o telefone aqui..."
                                value=""
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
                    <div class="col-2">
                        <label for="situacao">Situação</label>
                        <select id="situacao" 
                            name="situacao"
                            class="form-control">
                            <option value="Geral">Ativo</option>
                            <option value="Sócio">Inativo</option>
                        </select>                             
                    </div>
                </div>
            </div>
            <p>Não existe usuário cadastrado para esta pessoa</p>
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