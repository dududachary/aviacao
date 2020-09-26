@extends('admin.template')

@section('titulo')
    <span>Gerenciar Entidades</span>   
@endsection

@section('botao')
    <a href="{{ url('admin/entidades/create') }}" 
        class="btn btn-danger btn-sm btn-add float-right"> 
        <i class="fas fa-plus"></i> Adicionar Entidade
    </a>
@endsection

@section('conteudo')

    @isset($listar_entidades)
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Ação</th>
                </tr>
            </thead>
            <tbody>

                @forelse ($listar_entidades as $entidade)
                    <tr>
                        <td>{{ $entidade->id }}</td>
                        <td>{{ $entidade->nome }}</td>
                        <td>
                            <i class="fas fa-edit"></i> /
                            <i class="fas fa-trash-alt"></i>
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