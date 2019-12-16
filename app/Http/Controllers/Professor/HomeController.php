<?php

namespace App\Http\Controllers\Professor;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
   /**
     * Show Admin Dashboard.
     * 
     * @return \Illuminate\Http\Response
     */
    
    public function index(){
        return view('professor.home');
    }
    
}
