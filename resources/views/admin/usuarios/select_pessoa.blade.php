@extends('admin.template')

@section('titulo')
    <span>Selecione a Pessoa Para Criar o Usuário</span>   
@endsection

@section('botao')

@endsection

@section('conteudo')            

    @isset($listar_pessoas)

        <form action="{{ action('Admin\UsuariosController@select_pessoa')}}" method="GET">
            <div class="form-group">
                <label for="entidadeNome">Buscar Pessoa</label>
                <div class="input-group">
                    <input id="buscar" 
                        name="buscar"
                        type="text"
                        class="form-control col-4" 
                        placeholder="Digite a busca" 
                        aria-label="Digite a busca..." 
                        aria-describedby="basic-addon2"
                        value=""
                    >
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="submit">
                            <i class="fas fa-search"></i> Buscar
                        </button>
                    </div>
                </div>
            </div>
        </form>

        <div class="info">
            <p>
                <i class="fas fa-info-circle text-primary"></i>
                A busca pode ser feita por: <i>Nome Pessoal, Nome Social, CPF, Razão Social, Nome Fantasia e CNPJ</i>.
            </p>
        </div>
       
        <table class="table table-hover">
            <thead class="thead-light">
                <tr>
                    <th width="10%">ID</th>
                    <th width="70%">Nome</th>
                    <th width="20%%" class="text-center">Ação</th>
                </tr>
            </thead>
            <tbody>

                @forelse ($listar_pessoas as $pessoa)
                    <tr>
                        <td>{{ $pessoa->id }}</td>
                        <td>{{ $pessoa->nome_pessoal }} {{ $pessoa->nome_fantasia }}</td>
                        <td class="text-center">

                            <a class="btn btn-sm btn-primary" href="{{ action('Admin\UsuariosController@create', $pessoa->id) }}">
                                Criar Usuário
                            </a> 
                                                    
                        </td>
                    </tr>
                @empty
                    <div class="alert alert-warning text-center" role="alert">
                        Nenhum registro encontrado!
                    </div>
                @endforelse  

            </tbody>
        </table>

    @endisset
    
@endsection