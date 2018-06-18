<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Graduated extends Model
{
    //
    public function student(){
    	return $this->belongsTo('Student');
    }
}
