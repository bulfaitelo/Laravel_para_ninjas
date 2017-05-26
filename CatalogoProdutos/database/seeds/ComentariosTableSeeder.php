<?php

use Illuminate\Database\Seeder;

class ComentariosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comentarios')->insert([
        	'produto_id'=> 1,
        	'usuario'=> 'joadsjkasdk',
        	'comentario'=> "pproduto_id joinha",
        	'classificacao'=> 5,
        	'created_at' => date("y/m/d h:i:s"),
        	'updated_at' => date("y/m/d h:i:s"),
        ]);
        DB::table('comentarios')->insert([
        	'produto_id'=> 1,
        	'usuario'=> 'joadsjkadasdw123123weasdk',
        	'comentario'=> "pproduasdasdasdsadsadsdto joinha",
        	'classificacao'=> 4,
        	'created_at' => date("y/m/d h:i:s"),
        	'updated_at' => date("y/m/d h:i:s"),
        ]);
        DB::table('comentarios')->insert([
        	'produto_id'=> 1,
        	'usuario'=> 'joadsasdsdasdjkasdk',
        	'comentario'=> "pprasdasdoduto joinha",
        	'classificacao'=> 2,
        	'created_at' => date("y/m/d h:i:s"),
        	'updated_at' => date("y/m/d h:i:s"),
        ]);
    }
}
