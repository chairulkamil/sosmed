<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
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

    public function profiles(){
        return $this->hasOne('App\Profile');
    }

    public function posts(){
        return $this->hasMany('App\Post');
    }

    public function following()
    {
    return $this->belongsToMany(Profile::class, 'following', 'follower_profile_id', 'followed_profile_id');
    }

    public function followers()
    {
    return $this->belongsToMany(Profile::class, 'following', 'followed_profile_id', 'follower_profile_id');
    }
    
}
