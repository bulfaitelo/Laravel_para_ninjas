<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class ListaDeTarefasSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        DB::table('listadetarefas')->insert([
        	'texto'=> 'Comprar passagens aéreas.',
        	'autor'=> 'John doe',
        	'status'=> 'Concluido',
        	'created_at'=> date('Y-m-d h:i:s')
        ]);
        DB::table('listadetarefas')->insert([
        	'texto'=> 'Reservar Hotel',
        	'autor'=> 'John doe',
        	'status'=> 'Concluido',
        	'created_at'=> date('Y-m-d h:i:s')
        ]);
        DB::table('listadetarefas')->insert([
        	'texto'=> 'Prepara slider para apresentação',
        	'autor'=> 'John doe',
        	'status'=> 'Pendente',
        	'created_at'=> date('Y-m-d h:i:s')
        ]);
    }
}
