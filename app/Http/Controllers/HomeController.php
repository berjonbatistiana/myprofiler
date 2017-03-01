<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    //
    public function index(){

    	$current_user = Auth::user();
    	// $current_user['skills'] = $user->skills();
    	return view('layouts.profile')->with(['current_user'=>$current_user]);
    }
}
