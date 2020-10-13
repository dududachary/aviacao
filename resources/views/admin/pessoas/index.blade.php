@extends('admin.template')

@section('titulo')
    <span>Gerênciar Pessoas</span>   
@endsection

@section('botao')
    <a href="{{ url('admin/pessoas/type') }}" 
        class="btn btn-danger btn-sm btn-add float-right"> 
        <i class="fas fa-plus"></i> Adicionar Pessoas
    </a>
@endsection

@section('conteudo')

    @isset($listar_pessoas)

        {{-- @if (old('create'))
            <div class="alert alert-warning alert-dismissible">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <i class="fas fa-check-circle"></i> Entidade <strong>{{old('entidadeNome')}}</strong> cadastrada com sucesso!
            </div>
        @endif

        @if (old('edit'))
            <div class="alert alert-warning alert-dismissible">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <i class="fas fa-check-circle"></i> Entidade <strong>{{old('entidadeNome')}}</strong> editada com sucesso!
            </div>
        @endif --}}

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

                            <a class="btn btn-sm btn-primary" href="{{ action('Admin\PessoasController@edit', $pessoa->id) }}">
                                Alterar
                            </a> 

                            <a class="btn btn-sm btn-danger href="#" onclick="destroy('{{ action('Admin\PessoasController@destroy', $pessoa->id) }}');">
                                Apagar    
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

<script type="text/javascript">
    function destroy(url) {
        if (window.confirm('Deseja realmente apagar?')) {
            window.location = url;
        }
    }
</script>