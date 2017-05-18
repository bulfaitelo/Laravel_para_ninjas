@extends('layouts.app')
@section('title', 'Listagem de Produtos')
@section('content')
	<h1>Produtos</h1>
	{{Form::open(['url'=>['produtos/buscar']])}}
	<div class="row">
		<div class="col-lg-12">
			<div class="input-group">
				{{Form::text('busca', $busca,['class'=>'form-control', 'required', 'placeholder'=>'Buscar'])}}
				<span class="input-group-btn">
					{{Form::submit('Buscar', ['class'=>'btn btn-default'])}}
				</span>
			</div>
		</div>
	</div>
	{{Form::close()}}
	@if(Session::has('mensagem'))
		<div class="alert alert-success">{{Session::get('mensagem')}}</div>
	@endif
	<div class="row">
		@foreach($produtos as $produto)
			<div class="col-md-3">
				<h4>{{$produto->titulo}}</h4>
				@if(file_exists("./img/produtos/" . md5($produto->id) . ".png"))
					<a href="{{url('produtos/'. $produto->id) }}" class="thumbnail">
						{{Html::image(asset("img/produtos/" . md5($produto->id) . ".png"))}}
					</a>
				@else
					<a href="{{ url('produtos/' . $produto->id) }}" class="thumbnail">
						{{$produto->titulo}}
					</a>
				@endif			
			{{Form::open(['route'=>['produtos.destroy', $produto->id], 'method' => 'DELETE'])}}
			<a href="{{url('produtos/'. $produto->id.'/edit')}}" class="btn btn-default">Editar</a>
			{{ Form::submit('Excluir', ['class' => 'btn btn-default']) }}
			{{Form::close()}}
			</div>
		@endforeach
	</div>
	{{$produtos->appends(['busca' => $busca])->links()}}
@endsection