@extends('layouts.app')
@section('title', 'Adicionar um produto')

@section('content')
	<h1>Criar um novo Produto</h1>
	@if(count($errors) > 0)
		<div class="alert alert-danger">
			<ul>
				@foreach($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach				
			</ul>
		</div>
	@endif
	@if(Session::has('mensagem'))
		<div class="alert alert-success">
			{{Session::get('mensagem')}}
		</div>
	@endif
	{{Form::open(['route'=>['produtos.update', $produto->id], 'enctype'=> 'multipart/form-data', 'method'=>'PUT'])}}
		{{Form::label('referencia', 'Referencia')}}
			{{Form::text('referencia', $produto->referencia, ['class'=>'form-control', 'required', 'placeholder'=>'Referencia'])}}
		{{Form::label('titulo', 'Título')}}
			{{Form::text('titulo', $produto->titulo, ['class' => 'form-control', 'required', 'placeholder'=> 'Título'])}}
		{{Form::label('descricao', 'Descrição')}}
			{{Form::textarea('descricao', $produto->descricao, ['rows'=>3, 'class'=> 'form-control', 'required', 'placeholder'=>'Descrição' ])}}
		{{Form::label('preco', 'Preço')}}
			{{Form::text('preco', $produto->preco, ['class'=>'form-control', 'required', 'placeholder'=> 'Preço'])}}
		{{Form::label('foto', 'Foto')}}
			{{Form::file('fotoproduto', ['class'=>'form-control', 'id'=>'fotoproduto'])}}
		{{Form::submit('Alterar!', ['class' => 'btn btn-default'])}}
	{{Form::close()}}
@endsection