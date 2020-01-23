<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //
        protected $fillable = [
        'type',
    ];

    public function workers(){
    	return $this->belongsTo('App/Worker');
    }
        public function employers(){
    	return $this->belongsTo('App/Employer');
    }
}
