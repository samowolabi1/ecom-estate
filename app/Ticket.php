<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{


    protected $fillable = [
        'user_id','support_id','subject','category','details','priority','image','status',
    ];


     public function user(){
        
        return $this->belongsTo('App\User');
    }


    public function support(){
        
        return $this->belongsTo('App\Support');
    }

    public function comments(){
        
        return $this->hasMany('App\Comment');
    }
}

