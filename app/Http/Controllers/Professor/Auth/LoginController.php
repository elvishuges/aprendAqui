<?php

namespace App\Http\Controllers\Professor\Auth;

use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login',[
            'title' => 'Professor Login',
            'loginRoute' => 'professor.login',
            'forgotPasswordRoute' => 'professor.password.request',
        ]);
    }

    public function logout()
    {
    Auth::guard('professor')->logout();
    return redirect()
        ->route('professor.login')
        ->with('status','Admin has been logged out!');
    }

    public function login(Request $request)
    {   
        //dd($request);
        //return 'oi';
        $this->validator($request);
        //check if the user has too many login attempts.
        
        //attempt login.
        if(auth()->guard('professor')->attempt($request->only('email','password'),$request->filled('remember'))){
            //Authentication passed...
            //return 'login falhou';
            return redirect()
                ->intended(route('professor.home'))
                ->with('status','Você esta logado como um professor!');
        }
        //keep track of login attempts from the user.
        //$this->incrementLoginAttempts($request);
        //Authentication failed, redirect back with input.
        
        return $this->loginFailed();
    }

    private function validator(Request $request)
    {
        return 'oi';
    //validation rules.
    $rules = [
        'email'    => 'required|email|exists:professors|min:5|max:191',
        'password' => 'required|string|min:4|max:255',
    ];
    //custom validation error messages.
    $messages = [
        'email.exists' => 'These credentials do not match our records.',
    ];
    //validate the request.
    $request->validate($rules,$messages);
    }

    private function loginFailed(){
        //return 'login low'
        return redirect()->back()->withErrors(['errors' => 'Login ou senha incorretos para Professor ']);
    }
}
