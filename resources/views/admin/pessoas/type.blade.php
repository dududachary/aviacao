@extends('admin.template')

@section('titulo')
    <span>Cadastrar Pessoa</span>   
@endsection

@section('botao')

@endsection

@section('conteudo')
    <a class="btn btn-sm btn-primary" href="{{ action('Admin\PessoasController@create', 'F')}}">
        Pessoa Física
    </a>
    <a class="btn btn-sm btn-primary" href="{{ action('Admin\PessoasController@create', 'J')}}">
        Pessoa Jurídica
    </a>
@endsection