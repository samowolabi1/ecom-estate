<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Questocat\Referral\Traits\UserReferral;

class User extends Authenticatable
{
    use Notifiable;
    //use UserReferral;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','role_id','others','status',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

     public function tickets(){
        
        return $this->hasMany('App\Ticket');
    }

     public function role()
    {
        return $this->belongsTo('App\Role');
    }


      public function department()
    {
        return $this->belongsTo('App\Department');
    }

    public function comments(){
        
        return $this->hasMany('App\Comment');
    }



}
