<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
       protected $fillable = [
    	'user_id','category_id','title','image','content','tags',
    ];


    public function user(){

    	return $this->belongsTo('App\User');
    }


    public function category(){

    	return $this->belongsTo('App\Category');
    }
}
