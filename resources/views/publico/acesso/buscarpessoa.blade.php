@extends('publico.template')

@section('conteudo')
    <div class="p-2">
        <form action="{{ action('Publico\SejaMembroController@formularioMembro') }}" method="POST">
            <input type="hidden" name="busca" value="busca">
            <input type="hidden" name="_token" value="{{{ csrf_token() }}}">
            <div class="form-group">
                <label for="documento">Informe o e-mail cadastrado</label>
                <div class="input-group">
                    <input id="documento"
                        name="documento"
                        type="number"
                        class="form-control col-4" 
                        placeholder="Digite o e-mail aqui" 
                        aria-label="Digite a busca..." 
                        aria-describedby="basic-addon2"
                        value=""
                    >
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="submit">
                            <i class="fas fa-search"></i> Verificar e-mail
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>

    @isset($alerta)
        <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <i class="fas fa-exclamation-circle text-danger"></i> - {{ $alerta }}
        </div>
    @endisset

    @if ( count($errors) > 0)
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