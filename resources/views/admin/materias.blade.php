@extends('admin.template')

@section('titulo')
    <span>Cadastrar Matérias</span>   
@endsection

@section('botao')
    <a href="#" class="btn btn-danger btn-sm float-right" data-toggle="modal" data-target="#modal"> 
        <i class="fas fa-plus"></i> Adicionar Materias
    </a>
@endsection

@section('conteudo')
    <span>Conteúdo referente ao cadastro de matérias</span>
@endsection

<!-- Modal -->
<div class="modal fade" id="modal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            
            <div class="modal-header">
                <h4 class="modal-title">Adicionar Materias</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            
            <div class="modal-body">
                Formulário de cadastro
            </div>
            
            <div class="modal-footer">
                <button type="button" class="btn btn-primary btn-sm" data-dismiss="modal">
                    <i class="fas fa-sign-out-alt"></i> Fechar
                </button>
                <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">
                    <i class="fas fa-save"></i> Salvar
                </button>
            </div>
            
        </div>
    </div>
</div>