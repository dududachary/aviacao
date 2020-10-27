@extends('admin.template')

@section('titulo')
    <span>Selecione o tipo de pessoa</span>   
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

    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">

        <li class="nav-item">
            <a class="nav-link {{ count($errors) <= 0 ? 'active' : old('tipo_pessoa') === 'F' ? 'active' : ''}}" 
                id="pills-cpf-tab" 
                data-toggle="pill"
                href="#pills-cpf" 
                role="tab" 
                aria-controls="pills-cpf" 
                aria-selected="true">
                Pessoa Física
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link {{ count($errors) <= 0 ? '' : old('tipo_pessoa') === 'J' ? 'active' : ''}}" 
                id="pills-cnpj-tab" 
                data-toggle="pill" 
                href="#pills-cnpj"
                role="tab" 
                aria-controls="pills-cnpj" 
                aria-selected="false">
                Pessoa Jurídica
            </a>
        </li>

    </ul>

    <div class="tab-content" id="pills-tabContent">            

        <div class="tab-pane fade {{ count($errors) <= 0 ? 'show active' : old('tipo_pessoa') === 'F' ? 'show active' : ''}}" 
            id="pills-cpf" 
            role="tabpanel" 
            aria-labelledby="pills-cpf-tab">

            <form action="{{ action('Admin\PessoasController@findCpfCnpj')}}" method="POST">
                <input type="hidden" name="find" value="find">
                <input type="hidden" name="_token" value="{{{ csrf_token() }}}">
                <input type="hidden" name="tipo_pessoa" value="F">

                <div class="form-group">
                    <label for="entidadeNome">Digite o CPF</label>
                    <div class="input-group">
                        <input id="cpf" 
                            name="cpf"
                            type="number" 
                            class="form-control col-4" 
                            placeholder="Somente números" 
                            aria-label="Digite o CPF..." 
                            aria-describedby="basic-addon2"
                            value=""
                        >
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="submit">
                                Próximo <i class="fas fa-arrow-right"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
            
        <div class="tab-pane fade {{ count($errors) <= 0 ? '' : old('tipo_pessoa') === 'J' ? 'show active' : ''}}" 
            id="pills-cnpj" 
            role="tabpanel" 
            aria-labelledby="pills-cnpj-tab">

            <form action="{{ action('Admin\PessoasController@findCpfCnpj')}}" method="POST">
                <input type="hidden" name="find" value="find">
                <input type="hidden" name="_token" value="{{{ csrf_token() }}}">
                <input type="hidden" name="tipo_pessoa" value="J">

                <div class="form-group">
                    <label for="entidadeNome">Digite o CNPJ</label>
                    <div class="input-group">
                        <input id="cnpj"
                            name="cnpj" 
                            type="number" 
                            class="form-control col-4" 
                            placeholder="Somente números" 
                            aria-label="Digite o CNPJ..." 
                            aria-describedby="basic-addon2"
                            value=""
                        >
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="submit">
                                Próximo <i class="fas fa-arrow-right"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </form>

        </div>

    </div>

@endsection
