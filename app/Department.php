<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    
protected $fillable = [
        'name','hod',
];


   public function users(){
        
        return $this->hasMany('App\User');
    }
}