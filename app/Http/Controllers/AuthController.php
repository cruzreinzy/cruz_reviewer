<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function indexlogin(){
        return view('login');
    }

    public function indexsignup(){
        return view('signup');
    }
}
