<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['komentar', 'post_id', 'user_id'];

    public function likes(){
        return $this->hasMany('App\CLike');
    }

    public function users(){
        return $this->belongsToMany(User::class, 'comments', 'id', 'user_id');    
    }
}
