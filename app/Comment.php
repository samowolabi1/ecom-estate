<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
     protected $fillable = ['ticket_id','user_id','support_id','message','status',];


     public function user(){
        
        return $this->belongsTo('App\User');
    }


     public function support(){
        
        return $this->belongsTo('App\Support');
    }

     public function ticket(){
        
        return $this->belongsTo('App\Ticket');
    }





}
