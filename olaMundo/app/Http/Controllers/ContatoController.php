<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Mail;
class ContatoController extends Controller
{
    public function index() {
    	$data['titulo'] = "Minha página de contato!";
    	return view('contato', $data);
    }


    public function enviar(Request $request){
    	$data = array(
    		'assunto' => $request->input('assunto'),
    		'mensagem' => $request->input('mensagem'),
    	);
    	Mail::send('mensagem', $data, function ($message) {
    	    $message->from('bulfaitelo@gmail.com', 'bulfaitelo');    	
    	    $message->subject('Mensagem encaminhada e gz');
    	    $message->to('thiagorodriguesmelo@hotmail.com', 'Thiago');    	
    	});
    	return redirect ('contato');
    }

}
