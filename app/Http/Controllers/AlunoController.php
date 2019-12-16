<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Aluno;

class AlunoController extends Controller
{
     
     public function registerAluno(Request $request){ 

        
    	$pessoa = new Aluno();
    	
        $pessoa->nome = $request->nome;
        $pessoa->email = $request->email;
    	$pessoa->telefone = $request->telefone;
    	$pessoa->cpf = $request->cpf;
    	$pessoa->password = $request->password;
    	$pessoa->save();
        /*return view('aluno.home');*/
        //retornar lista de professores nessa rota

        return redirect()->intended('aluno/getRegister');
    }

    public function home(){ //falta criar o request 
    	return view('aluno.home');
	}
}
