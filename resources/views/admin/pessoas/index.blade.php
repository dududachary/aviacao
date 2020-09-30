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
    <span>Conteúdo referente ao cadastro e gerênciamento de pessoas</span>
@endsection