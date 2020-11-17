@extends('admin.template')

@section('titulo')
    <span>Criar Novo Usuário Para <b>({{ $pessoa->nome_pessoal}} {{$pessoa->nome_fantasia}})</b></span>   
@endsection

@section('botao')

@endsection

@section('conteudo')            

    {{-- @if ( count($errors) > 0)
        <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert">&times;</button>

            <ul class="errors">
                @foreach ($errors->all() as $error)
                    <li><i class="fas fa-exclamation-circle"></i> - {{ $error }}</li>
                @endforeach
            </ul>

        </div>
    @endif --}}

    {{-- <form action="{{ action('Admin\EntidadesController@store') }}" method="POST">
        <input type="hidden" name="create" value="create">
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
    </form> --}}

    <form action="{{ action('Admin\UsuariosController@store') }}" method="POST">
        <input type="hidden" name="create" value="create">
        <input type="hidden" name="_token" value="{{{ csrf_token() }}}">
        <input type="hidden" name="id_pessoa" value="{{ $id_pessoa }}">

        <div class="form-group">
            <div class="form-row">

                <div class="col-3">
                    <label for="usuario">Usuário</label>
                    <input id="usuario"
                        name="usuario"
                        type="text" class="form-control" 
                        value="{{ $usuario }}"
                    >                                    
                </div>

            </div>            
        </div>

        <div class="form-group">
            <div class="form-row">

                <div class="col-3">
                    <label for="senha">Senha</label>
                    <input id="senha"
                        name="senha"
                        type="password" class="form-control" 
                        value="{{ $senha }}"
                    >                                    
                </div>

            </div>            
        </div>

        <div class="alert alert-primary text-center" role="alert">            
            <i class="fas fa-info-circle text-primary"></i>
            Ao clicar em salvar, automaticamente será enviada uma mensagem com o 
            <strong>Usuário</strong> e <strong>Senha</strong> para o email <strong>{{ $pessoa->email }}</strong> 
            cadastrado no sistema!
        </div>

        <a href="{{ url('admin/usuarios/index') }}" type="button" class="btn btn-danger btn-sm">
            <i class="fas fa-sign-out-alt"></i> Fechar
        </a>
        <button type="submit" class="btn btn-primary btn-sm">
            <i class="fas fa-save"></i> Salvar
        </button>
    </form>
    
@endsection