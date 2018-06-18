<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //

    public function graduates(){
		return $this->hasMany('App\Graduated');
	}

	public function precincts(){
		return $this->belongsTo('App\Precinct');
	}

	public function programs(){
		return $this->hasMany('App\Program');
	}

	public function careers(){
		return $this->belongsToMany('App\Career');
	}

	public function changes(){
		return $this->hasMany('App\CareerChange');
	}
}
