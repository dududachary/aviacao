@extends('admin.template')

@section('titulo')
    <span>Gerenciar Links Úteis</span>   
@endsection

@section('botao')
    <a href="{{ url('admin/linksuteis/create') }}" 
        class="btn btn-danger btn-sm btn-add float-right"> 
        <i class="fas fa-plus"></i> Adicionar Link
    </a>
@endsection

@section('conteudo')
    @isset($listar_links)

        @if (old('create'))
            <div class="alert alert-warning alert-dismissible">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <i class="fas fa-check-circle"></i> Link <strong>{{old('url')}}</strong> cadastrado com sucesso!
            </div>
        @endif

        @if (old('edit'))
            <div class="alert alert-warning alert-dismissible">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <i class="fas fa-check-circle"></i> Link <strong>{{old('url')}}</strong> editado com sucesso!
            </div>
        @endif

        <table class="table table-hover">
            <thead class="thead-light">
                <tr>
                    <th width="45%">Titulo</th>
                    <th width="40%">Url</th>
                    <th width="15%" class="text-center">Ação</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($listar_links as $link)
                    <tr>
                        <td>{{ $link->titulo }}</td>
                        <td>{{ $link->url }}</td>

                        <td class="text-center">

                            <a class="btn btn-sm btn-primary" href="{{ action('Admin\LinksUteisController@edit', $link->id) }}">
                                Alterar
                            </a>
                            <a class="btn btn-sm btn-danger href="#" onclick="destroy('{{ action('Admin\LinksUteisController@destroy', $link->id) }}');">
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