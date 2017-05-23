@extends('layouts.app')
@section('title', $titulo)
@section('content')
<h1>Contato</h1>
{{Form::open(['url'=>['contato/enviar']])}}
<div class="row">
	{{Form::label('assunto', "Assunto")}}
	{{Form::text('assunto', "", ['class'=>'form-control', 'required', 'placeholder'=>'assunto'])}}
	{{Form::label('mensagem', "mensagem")}}
	{{Form::text('mensagem', "", ['class'=>'form-control', 'required', 'placeholder'=>'mensagem'])}}
	{{Form::submit('Enviar Mensagem', ['class'=>'btn btn-default'])}}
</div>
{{Form::close()}}
@endsection