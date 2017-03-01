<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Route::get('/login', function () {
//     return view('layouts.login');
// });

use App\Skill;
use App\User;

Route::get('/', [
	'uses' => 'HomeController@index',
	'as' => 'home'
	])->middleware('authenticated');

Route::get('/login', [
	'uses'=>'LoginController@index',
	'as'=>'login'
	])->middleware('unauthenticated');

Route::get('/logout', [
	'uses'=>'LoginController@logout',
	'as'=>'logout'
	]);

Route::resource('/signup', 'SignupController');
Route::post('/login', 'LoginController@postLogin');

Route::get('/addskill', function(){
	Skill::addSkill(1, "Test");
});

Route::get('/detachskill', function(){

	User::detatchSkill(1, 1);
});
