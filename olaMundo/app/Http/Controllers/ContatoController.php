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
    	Mail::send('mail', $data, function ($message) {
    	    $message->from('bpostmaster@sandbox52ef429eb4d94391a6cd6e2d8a96e18b.mailgun.org', 'bulfaitelo');    	
    	    $message->subject('Mensagem encaminhada e gz');
    	    $message->to('bulfaitelo@gmail.com', 'Thiago');    	
    	});
    	return redirect ('contato');
    }

}
