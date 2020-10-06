@extends('admin.template')

@section('titulo')
    <span>Cadastrar Pessoa</span>   
@endsection

@section('botao')

@endsection

@section('conteudo')
    <a class="btn btn-sm btn-primary" href="{{ action('Admin\PessoasController@create', 'F')}}">
        <i class="fas fa-user"></i> Pessoa Física
    </a>
    <a class="btn btn-sm btn-secondary" href="{{ action('Admin\PessoasController@create', 'J')}}">
        <i class="fas fa-building"></i> Pessoa Jurídica
    </a>
@endsection