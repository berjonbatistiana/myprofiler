<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Input;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('layouts.login');
    }

    public function postLogin(Request $request){
    	$email = $request->email;
    	$password = $request->password;

    	if(Auth::attempt(['email' => $email, 'password' => $password])) {

    		return redirect()->intended('/');
    	}

         $errors = ['Email or password is incorrect.'];
         return redirect()->back()->withInput($request->except('password'))->withErrors($errors);
    }

    public function logout(){
    	Auth::logout();
    	return redirect()->route('login');
    }

}
