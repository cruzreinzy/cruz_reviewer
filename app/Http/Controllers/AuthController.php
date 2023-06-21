<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function indexlogin(){
        return view('login');
    }
    
    public function login(Request $req){
        $credentials = $req->only(['username','password']);

        if(Auth::attempt($credentials)){
            return redirect('/');
        }else{
            return redirect()->back()->withErrors(['message'=>'Invalid username or password']);
        }
    }

    public function indexsignup(){
        return view('signup');
    }

    public function signup(Request $req){

        $val = $req->validate([
            'name'=>'required|min:8|max:40',
            'username'=>'required|unique:users|min:6|max:18',
            'password'=>'required|min:8|max:30'
        ]);

        $val['password'] = Hash::make($val['password']);

        $user = User::create($val);

        if($user){
            return redirect('/');
        }
    }

}
