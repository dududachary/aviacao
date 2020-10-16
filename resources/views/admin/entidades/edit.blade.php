@extends('admin.template')

@section('titulo')
    <span>Alterar Entidade</span>   
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

    <form action="{{ action('Admin\EntidadesController@update', $lista_entidade->id) }}" method="POST">
        <input type="hidden" name="edit" value="edit">
        <input type="hidden" name="_token" value="{{{ csrf_token() }}}">
        <div class="form-group">
            <div class="form-row">
                <div class="col-12">

                    @error('nome')
                        <i class="fas fa-exclamation-circle text-danger"></i>
                    @enderror

                    <label for="entidadeNome">Nome</label>
                        <input id="entidadeNome"
                            name="entidadeNome"
                            type="text" class="form-control" 
                            placeholder="Digite o nome da entidade aqui..."
                            value="{{ $lista_entidade->nome }}"
                        >                                    
                </div>
            </div>
        </div>

        <a href="{{ url('admin/entidades/index') }}" type="button" class="btn btn-danger btn-sm">
            <i class="fas fa-sign-out-alt"></i> Fechar
        </a>
        <button type="submit" class="btn btn-primary btn-sm">
            <i class="fas fa-save"></i> Salvar
        </button>
    </form>              
@endsection