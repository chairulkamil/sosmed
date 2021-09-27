<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['komentar', 'post_id', 'user_id'];

    public function suka(){
        return $this->hasMany('App\Suka');
    }

    public function users(){
        return $this->belongsToMany(User::class, 'comments', 'id', 'user_id');    
    }
}
