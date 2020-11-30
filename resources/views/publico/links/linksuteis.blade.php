@extends('publico.template')

@section('conteudo')

<div class="p-4">

	@foreach ($listar_links as $link)
		<div class="card">
			<h5 class="card-header">{{ $link->titulo }}</h5>
			<div class="card-body">
				<!-- <h5 class="card-title">{{ $link->url }}</h5> -->
				<p class="card-text">{{ $link->descricao }}</p>
				<a href="{{ $link->url }}" class="btn btn-primary btn-sm" target="_blank">Ir para o site</a>
			</div>
		</div>
	@endforeach	
	
</div>

@endsection