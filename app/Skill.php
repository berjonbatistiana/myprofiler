<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class Skill extends Model
{
    //

    protected $fillable = [
        'skill_name'
    ];

    public static function addSkill($user_id, $skill_name){


    	$skill = Skill::firstOrCreate(['skill_name' => $skill_name]);

    	try{
    		$skill->users()->attach($user_id);
    	} catch (\Illuminate\Database\QueryException $e){
    		// Skill already tagged to user
    	}
    }

    public static function detatchUser($user_id, $skill_id){
    	$skill = Skill::find($skill_id);
    	$skill->users()->detach($user_id);
    }

    public function users(){
        return $this->belongsToMany('App\User');
    }
}
