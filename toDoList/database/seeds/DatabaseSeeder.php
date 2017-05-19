<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
    	Model::unguard();
    	$this->call(ListaDeTarefasSeed::class);
    	$this->command->info(
    		'Tarefas adicionadas com sucesso a tabla Listadetarefas');
    	Model::reguard();
    }
}
