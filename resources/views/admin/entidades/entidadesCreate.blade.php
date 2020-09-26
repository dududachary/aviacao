@extends('admin.template')

@section('titulo')
    <span>Inserir Nova Entidade</span>   
@endsection


@section('botao')

@endsection


@section('conteudo')                    
    <form action="">
        <div class="form-group">
            <div class="form-row">
                <div class="col-12">
                    <label for="entidadeNome">Nome da Entidade</label>
                        <input id="inputEntidade" 
                        type="text" class="form-control" 
                        placeholder="Digite o nome da entidade aqui...">                                    
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="form-row">
                <div class="col-12">
                    <label for="entidadeDescricao">Descrição da Entidade</label>
                    <textarea id="entidadeDescricao" 
                        class="form-control" 
                        rows="5"></textarea>
                </div>
            </div>
        </div>

        <a href="{{ url('admin/entidades') }}" type="button" class="btn btn-primary btn-sm">
            <i class="fas fa-sign-out-alt"></i> Fechar
        </a>
        <a type="button" class="btn btn-danger btn-sm">
            <i class="fas fa-save"></i> Salvar
        </a>

    </form>                
@endsection