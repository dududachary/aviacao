@extends('publico.template')

@section('conteudo')

    <div class="p-4">
        <form action="{{ action('Publico\AcessoController@storeUsuario') }}" method="POST">
            <input type="hidden" name="create" value="create">
            <input type="hidden" name="_token" value="{{{ csrf_token() }}}">
            <input type="hidden" name="id_pessoa" value="{{ $id_pessoa }}">
            <input type="hidden" name="email" value="{{ $email }}">
    
            <div class="form-group">
                <div class="form-row">
    
                    <div class="col-3">
                        <label>Usuário: <b>{{ $email }}</b></label>
                    </div>
    
                </div>            
            </div>
    
            <div class="form-group">
                <div class="form-row">
    
                    <div class="col-3">
                        <label for="password">Senha <small>*(No mínimo 6 dígitos)</small></label>
                        <input id="password"
                            name="password"
                            type="password" class="form-control" 
                            value=""
                        >                                    
                    </div>
    
                </div>            
            </div>

            <div class="form-group">
                <div class="form-row">
    
                    <div class="col-3">
                        <label for="password_confirmation">Repita a Senha</label>
                        <input id="password_confirmation"
                            name="password_confirmation"
                            type="password" class="form-control" 
                            value=""
                        >                                    
                    </div>
    
                </div>            
            </div>
    
            <a href="{{ route('inicial') }}" type="button" class="btn btn-danger btn-sm">
                <i class="fas fa-sign-out-alt"></i> Fechar
            </a>
            <button type="submit" class="btn btn-primary btn-sm">
                <i class="fas fa-user-plus"></i></i> Criar Usuário
            </button>
        </form>
    </div>

        @if ( count($errors) > 0 )
            <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <ul class="errors list-group">
                    @foreach ($errors->all() as $error)
                        <li style="list-style-type: none">
                            <i class="fas fa-exclamation-circle text-danger"></i> - {{ $error }}
                        </li>
                    @endforeach
                </ul>
            </div>
        @endif

@endsection