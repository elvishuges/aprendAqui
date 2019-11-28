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
    Auth::guard('admin')->logout();
    return redirect()
        ->route('professor.login')
        ->with('status','Admin has been logged out!');
    }

    public function login(Request $request)
    {   

        //return "oi";
        $this->validator($request);
        //check if the user has too many login attempts.
        
        //attempt login.
        if(Auth::guard('professor')->attempt($request->only('email','password'),$request->filled('remember'))){
            //Authentication passed...
            return redirect()
                ->intended(route('professor.home'))
                ->with('status','You are Logged in as Admin!');
        }
        //keep track of login attempts from the user.
        //$this->incrementLoginAttempts($request);
        //Authentication failed, redirect back with input.
        return $this->loginFailed();
    }

    private function validator(Request $request)
    {
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
        return redirect()
            ->back()
            ->withInput()
            ->with('error','Login failed, please try again!');
    }
}
