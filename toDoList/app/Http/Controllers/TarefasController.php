<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests;
use App\ListaDeTarefas;

class TarefasController extends Controller
{
    public function index(){
    	return Response()->json(ListaDeTarefas::orderBy('id', 'desc')->get(), 200);
    }

    public function store(Request $request) {
    	$tarefa = new ListaDeTarefas();
    	$tarefa->texto = $request->inpu('texto');
    	$tarefa->autor = $request->inpu('autor');
    	$tarefa->status = $request->inpu('status');
    	if($tarefa->salve()){
    		return Response("1", 201);
    	}else{
    		return Response("0", 304);
    	}
    }
}
