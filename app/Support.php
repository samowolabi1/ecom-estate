<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Support extends Model
{
    
    protected $fillable = ['name',];



     public function tickets(){
        
        return $this->hasMany('App\Ticket');
    }

     public function comments(){
        
        return $this->hasMany('App\Comment');
    }
}
