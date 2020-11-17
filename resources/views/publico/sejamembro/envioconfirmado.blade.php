@extends('publico.template')

@section('conteudo')

    <div class="p-4">
        <div class="alert alert-success alert-dismissible text-center">
            <i class="fas fa-share"></i>
            Formulário de cadastro enviado, você receberá um email com cópia de todos os dados deste formulário e mais informações, obrigado!
            <div>
                <a href="{{ route('inicial') }}">Clique aqui para retornar a página principal!</a>
            </div>
        </div>
    </div>

@endsection