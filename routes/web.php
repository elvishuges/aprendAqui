<?php
/* --------------------- Common/User Routes START -------------------------------- */
Route::get('/', function () {
    return view('welcome');
});
Auth::routes([ 'verify' => true ]);
//Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');
/* --------------------- Common/User Routes END -------------------------------- */


Route::get('/index', function () {
    return view('index');
});





Route::post('professor/register', 'ProfessorController@registerProfessor')->name('registerprofessor');
Route::post('aluno/register', 'AlunoController@registerAluno')->name('registeraluno');

Route::get('professor/getRegister', function () {
    return view('professor.home');
});

Route::get('aluno/getRegister', function () {
    return view('aluno.home');
});

/* ----------------------- Admin Routes START -------------------------------- */
Route::prefix('/professor')->name('professor.')->namespace('Professor')->group(function(){
    
    /**
     * Admin Auth Route(s)
     */
    Route::namespace('Auth')->group(function(){
        
        //Login Routes
        Route::get('/login','LoginController@showLoginForm')->name('login');
        Route::post('/login','LoginController@login');
        Route::post('/logout','LoginController@logout')->name('logout');
        //Register Routes
        // Route::get('/register','RegisterController@showRegistrationForm')->name('register');
        // Route::post('/register','RegisterController@register');
        //Forgot Password Routes
        Route::get('/password/reset','ForgotPasswordController@showLinkRequestForm')->name('password.request');
        Route::post('/password/email','ForgotPasswordController@sendResetLinkEmail')->name('password.email');
        //Reset Password Routes
        Route::get('/password/reset/{token}','ResetPasswordController@showResetForm')->name('password.reset');
        Route::post('/password/reset','ResetPasswordController@reset')->name('password.update');
        // Email Verification Route(s)
        Route::get('email/verify','VerificationController@show')->name('verification.notice');
        Route::get('email/verify/{id}','VerificationController@verify')->name('verification.verify');
        Route::get('email/resend','VerificationController@resend')->name('verification.resend');
    });
    // Route::get('/dashboard','HomeController@index')->name('home')->middleware('auth');
    Route::get('/dashboard','HomeController@index')->name('home');
    //Put all of your admin routes here...
});
/* ----------------------- Admin Routes END -------------------------------- */