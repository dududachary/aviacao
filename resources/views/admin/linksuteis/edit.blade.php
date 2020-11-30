@extends('admin.template')

@section('titulo')
    <span>Alterar Link</span>
@endsection

@section('botao')

@endsection

@section('conteudo')

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

    <form action="{{ action('Admin\LinksUteisController@update', $lista_link->id) }}" method="POST">
        <input type="hidden" name="edit" value="edit">
        <input type="hidden" name="_token" value="{{{ csrf_token() }}}">
        <div class="form-group">
            <div class="form-row">
                <div class="col-6">

                    @error('titulo')
                        <i class="fas fa-exclamation-circle text-danger"></i>
                    @enderror

                    <label for="titulo">Título</label>
                        <input id="titulo"
                            name="titulo"
                            type="text" class="form-control" 
                            placeholder="Digite o título aqui..."
                            value="{{ (old('titulo')) ? old('titulo') : $lista_link->titulo }}"
                        >                                    
                </div>

                <div class="col-6">

                    @error('url')
                        <i class="fas fa-exclamation-circle text-danger"></i>
                    @enderror

                    <label for="url">Url</label>
                        <input id="url"
                            name="url"
                            type="text" class="form-control" 
                            placeholder="Digite o título aqui..."
                            value="{{ (old('url')) ? old('url') : $lista_link->url }}"
                        >                                    
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="form-row">
                <div class="col-10">

                    @error('descricao')
                        <i class="fas fa-exclamation-circle text-danger"></i>
                    @enderror

                    <label for="descricao">Descrição</label>
                        <input id="descricao"
                            name="descricao"
                            type="text" class="form-control" 
                            placeholder="Digite a descrição do link aqui..."
                            value="{{ (old('descricao')) ? old('descricao') : $lista_link->descricao }}"
                        >                                    
                </div>

                <div class="col-2">
                    @error('status')
                        <i class="fas fa-exclamation-circle text-danger"></i>
                    @enderror

                    <label for="status">Status</label>
                    <select id="status" 
                        name="status"
                        class="form-control">

                    @if (old('status'))
                        <option value="{{old('status')}}">
                            {{old('status')}}
                        </option>
                    @else
                        <option value="{{ $lista_link->status }}">
                            {{ $lista_link->status }}
                        </option>
                    @endif

                        <option value="Publicado">Publicado</option>
                        <option value="Arquivado">Arquivado</option>
                    </select>                             
                </div>
            </div>
        </div>

        <a href="{{ url('admin/linksuteis/index') }}" type="button" class="btn btn-danger btn-sm">
            <i class="fas fa-sign-out-alt"></i> Fechar
        </a>
        <button type="submit" class="btn btn-primary btn-sm">
            <i class="fas fa-save"></i> Salvar
        </button>
    </form>
@endsection