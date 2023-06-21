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

    public function signup(Request $req){

        $val = $req->validate([
            'name'=>'required|max:40',
            'username'=>'required|unique:users|min:6|max:18',
            'password'=>'required|min:8|max:30'
        ]);

        $val['password'] = Hash::make($val['password']);

        $user = User::create($val);

        if($user){
            return redirect('/login');
        }
    }

}
