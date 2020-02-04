<?php

use Illuminate\Database\Seeder;
use App\Aluno;

class AlunoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pessoa = new Aluno();
        
        $pessoa->nome = "Vanessa";
        $pessoa->email = "aluno@gmail.com";
    	$pessoa->telefone = "123554";
    	$pessoa->cpf = "525754545";
    	$pessoa->password = "135462";

    	$pessoa->save();
    }
}
