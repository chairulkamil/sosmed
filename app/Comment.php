<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function likes(){
        return $this->hasMany('App\CLike');
    }

    public function users(){
        return $this->belongsTo('App\User');
    }
}
