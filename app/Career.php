<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
    //
    public function faculties(){
    	return $this->belongsTo('Faculty');
    }

    public function changes(){
    	return $this->hasMany('CareerChange');
    }

    public function students(){
		return $this->belongsToMany('App\Student');
	}

}
