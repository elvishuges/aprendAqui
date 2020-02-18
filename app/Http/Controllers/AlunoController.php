<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Aluno;
use App\User;
use App\Pedido;
use App\Professor;
use DB;

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
		$professores = Professor::all();
    	return view('aluno.home')->with(compact('professores'));
	}

	public function perfilProfessor($id){ //falta criar o request 
		$professor = DB::table('professors')->where('id', $id)->get();		
    	return view('aluno.perfilProfessor')->with(compact('professor'));
	}
	
	public function formConvite($id){ //falta criar o request 
		$professor = DB::table('professors')->where('id', $id)->get();		
    	return view('aluno.formConvite')->with(compact('professor'));
	}

	public function enviarConvite(Request $request){ //falta criar o request 
		dd($request->all());	
		

		// NAO EXCLUIR ESSA PARTE !!!!!!!!!!!!
		 
		//$pedido = new Pedido();
		// $pedido->status = 0;
		// $pedido->data_aula = $request->dataInicio;
		// $pedido->local_aula = $request->localAula;
		// $pedido->horario_aula = $request->dataInicio;
		// $pedido->descricao_aula = $request->mensagem;
		// $pedido->id_aluno = 0;
		// $pedido->professor_id = 0;

    	return view('aluno.formConvite')->with(compact('professor'));
	}
	
}
