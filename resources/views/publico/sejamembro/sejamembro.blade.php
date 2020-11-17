@extends('publico.template')

@section('conteudo')

    <br>

    <div class="text-center">
        <h2 class="text-center">Termo De Consentimento</h2>
        <p>Para envio do formulário de cadastro</p>
    </div>

    <div class="text-center">
        <a href="{{ route('sejamembro.buscadocumento') }}" class="btn btn-primary">
            Eu aceito os termos e quero enviar o formulário de cadastro
        </a>
    </div>

    <br>

@endsection