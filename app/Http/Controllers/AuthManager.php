<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthManager extends Controller
{
    function login(){
        return view('login');
    }

    function register(){
        return view('register');
    }
    function loginPost(Request $request){
       $request->validate([
        'email' =>'required',
        'password' =>'required'
       ]);
       $credentials = $request->only('email','password');
       if(Auth::attempt($credentials)){
        return redirect()->intended(route('home'));
       }
       return redirect()->intended(route('login'))->with("error", "Login details not valid");
    }
    function registerPost(Request $request){
        $request->validate([
         'name' =>'required',
         'email' =>'required|email|unique:users',
         'password' =>'required'
        ]);
        
       $data['name'] = $request->name;
       $data['email'] = $request->email;
       $data['password'] = Hash::make($request->password);
       $user = User::create($data);
       if(!$user){
        return redirect()->intended(route('register'))->with("error", "Regitration failed, Try again");
       }
       return redirect()->intended(route('login'))->with("success", "Registration successfull,Login to acces App");
     }
     function logout() {
        Session::flush();
        Auth::logout();
        return redirect()->intended(route('login'));
        
     }
}
