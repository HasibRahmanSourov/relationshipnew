<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    protected $fillable = ['dist_name'];

    public function student(){
    	return $this->hasMany('App\Student');
    }
}
