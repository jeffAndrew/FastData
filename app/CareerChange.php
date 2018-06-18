<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CareerChange extends Model
{
    public function students(){
    	return $this->belongsTo('App\Student');
    }

    public function career(){
    	return $this->belongsTo('App\Career');
    } 
}
