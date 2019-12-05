<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Professor;

class ProfessorController extends Controller
{
   public function registerProfessor(Request $request){ //falta criar o request 
    	$professor = new Professor();
    	 
        $professor->nome1 = $request->nome1;
        $professor->email1 = $request->email1;
    	$professor->telefone1 = $request->telefone1;
    	$professor->cpf1 = $request->cpf1;
    	$professor->password1 = $request->password1;
    	$professor->endereco1 = $request->endereco1;
    	$professor->habilidade1 = $request->habilidade1;

    	$professor->save();

    	/*return view('professor.home');*/
        return redirect()->intended('professor/getRegister');
    }
}
