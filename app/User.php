<?php

namespace App;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    //

    protected $fillable = [
        'first_name', 'last_name', 'contact_number', 'address', 'email', 'password'
    ];

    protected $hidden = [
        'password', 'remember_token'
    ];

    public static function pullBasic($id){

        $user = User::find($id);
        return $user;
    }

    public static function createNewUser(Request $request){

        $newuser = User::create([

            'first_name'=>$request->first_name, 
            'last_name'=>$request->last_name, 
            'contact_number'=>$request->contact_number, 
            'address'=>$request->address, 
            'email'=>$request->email, 
            'password'=>bcrypt($request->password)

            ]);
    }

    public static function detatchSkill($user_id, $skill_id){
        $user = User::find($user_id);
        $user->skills()->detach($skill_id);
    }

    public function skills(){
        return $this->belongsToMany('App\Skill');
    }
}
