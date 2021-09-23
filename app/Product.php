<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
      protected $fillable = [
        'user_id','name', 'btc','btc_min','status','btc_day','affilliate_bonus',
    ];



     public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function miner()
    {
        return $this->hasOne('App\Miner');
    }

    
}