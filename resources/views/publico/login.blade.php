@extends('publico.template')

@section('conteudo')
    <form action="{{ route('login.verificacao') }}" class="form" role="form" method="POST">
        @csrf
        <div class="form-group">
            <input id="usuario" 
                name="usuario" 
                placeholder="Usuário" 
                class="form-control form-control-sm" 
                type="text" 
                required=""
                value="00970337078">
        </div>
        <div class="form-group">
            <input id="senha" 
                name="senha" 
                placeholder="Senha" 
                class="form-control form-control-sm" 
                type="password" 
                required=""
                value="abefaer009703">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">Entrar</button>
        </div>
        <div class="form-group text-center">
            <small><a href="#" data-toggle="modal" data-target="#modalPassword">Esqueceu a senha?</a></small>
        </div>
    </form>
@endsection