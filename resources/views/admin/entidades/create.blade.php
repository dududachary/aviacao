@extends('admin.template')

@section('titulo')
    <span>Inserir Nova Entidade</span>   
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

    <form action="{{ action('Admin\EntidadesController@store') }}" method="POST">
        <input type="hidden" name="create" value="create">
        <input type="hidden" name="_token" value="{{{ csrf_token() }}}">
        <div class="form-group">
            <div class="form-row">
                <div class="col-12">
                    <label for="entidadeNome">Nome</label>
                        <input id="entidadeNome"
                            name="entidadeNome"
                            type="text" class="form-control" 
                            placeholder="Digite o nome da entidade aqui..."
                            value="{{old('entidadeNome')}}"
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