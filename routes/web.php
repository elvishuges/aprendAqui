<?php
/* --------------------- Common/User Routes START -------------------------------- */
Route::get('/', function () {
    return view('welcome',[
     'loginRouteProfessor' => 'professor.login',
     'loginRouteAluno' => 'aluno.login',
    ]);
});
Auth::routes([ 'verify' => true ]);
//Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');
/* --------------------- Common/User Routes END -------------------------------- */


Route::get('/index', function () {
    return view('index');
});



//Route::post('professor/register', 'ProfessorController@registerProfessor')->name('registerprofessor');
//Route::post('aluno/register', 'AlunoController@registerAluno')->name('registeraluno');

Route::post('professor/register', 'HomeController@registerProfessor')->name('registerprofessor');
Route::post('aluno/register', 'HomeController@registerAluno')->name('registeraluno');


Route::get('professor/getRegister', function () {
    return view('professor.home');
});

Route::get('aluno/getRegister', function () {
    return view('aluno.home');
});

Route::get('aluno/home', function () {
    return view('aluno.home');
});



Route::get('/aluno/home','AlunoController@home')->name('aluno.home');
Route::get('/aluno/perfilProfessor/{idProfessor}','AlunoController@perfilProfessor')->name('aluno.perfilProfessor');
Route::get('/aluno/formConvite/{idProfessor}','AlunoController@formConvite')->name('aluno.formConvite');
Route::post('/aluno/enviarConvite','AlunoController@enviarConvite')->name('aluno.enviarConvite');


/* ----------------------- Professor Routes START -------------------------------- */
Route::prefix('/professor')->name('professor.')->namespace('Professor')->group(function(){
    
    /**
     * Admin Auth Route(s)
     */
    Route::namespace('Auth')->group(function(){
        
        //Login Routes
        Route::get('/login','LoginController@showLoginForm')->name('login');
        Route::post('/login','LoginController@login');
        Route::post('/logout','LoginController@logout')->name('logout');
        
        Route::get('/password/reset','ForgotPasswordController@showLinkRequestForm')->name('password.request');
        Route::post('/password/email','ForgotPasswordController@sendResetLinkEmail')->name('password.email');
        //Reset Password Routes
        Route::get('/password/reset/{token}','ResetPasswordController@showResetForm')->name('password.reset');
        Route::post('/password/reset','ResetPasswordController@reset')->name('password.update');
        // Email Verification Route(s)
        Route::get('email/verify','VerificationController@show')->name('verification.notice');
        Route::get('email/verify/{id}','VerificationController@verify')->name('verification.verify');
        Route::get('email/resend','VerificationController@resend')->name('verification.resend');
        Route::get('/dashboard','HomeController@index')->name('home');
       
    });

    Route::get('/home','HomeController@index')->name('home');
    // Route::get('/dashboard','HomeController@index')->name('home')->middleware('auth');
    
    //Put all of your admin routes here...
});
/* ----------------------- Admin Routes END -------------------------------- */
