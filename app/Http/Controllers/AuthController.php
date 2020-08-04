<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(){
    	return view('from');
    }
    public function welcome_post(){
    	return view('selamat');
    }
}
