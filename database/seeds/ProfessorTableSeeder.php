<?php

use Illuminate\Database\Seeder;
use App\Professor;

class ProfessorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $professor = new Professor();
    	 
        $professor->nome1 = "Professor";
        $professor->email1 = "professor@gmail.com";
    	$professor->telefone1 = "56566";
    	$professor->cpf1 = "58565";
    	$professor->password1 = "542145";
    	$professor->endereco1 = "4545727";
    	$professor->habilidade1 = "yutred";

    	$professor->save();
    }
}
