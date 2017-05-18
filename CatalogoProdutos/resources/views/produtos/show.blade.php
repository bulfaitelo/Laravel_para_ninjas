	@extends('layouts.app')
	@section('title', $produto->titulo)
	@section('content')
		<h1>Produto {{ $produto->titulo }}</h1>
		<div class="row">
			<div class="col-lx-5 col-md-3">
				<ul>
					<li>Referência: {{$produto->referencia}}</li>
					<li>Preço: R${{number_format($produto->preco,2,',','.')}}</li>
					<li>Adicionado em: {{ date("d/m/Y",strtotime($produto->created_at))}}</li>
				</ul>
				<p>{{$produto->descricao}}</p>
			</div>
		@if(file_exists("./img/produtos/" . md5($produto->id) . ".png"))
			<div class="col-lx-5 col-md-3">
				<a href='{{asset("img/produtos/" . md5($produto->id) . ".png")}}' class="thumbnail">
					{{Html::image(asset("img/produtos/" . md5($produto->id) . ".png"), $produto->titulo)}}				
				</a>		
			</div>
		@endif	
		</div>
		<a href="javascript:history.go(-1)">Voltar</a>
	@endsection