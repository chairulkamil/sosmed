<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
        'fullName',
        'alamat',
        'no_hp',
        'foto',
        'tgl_lahir',
        'work',
        'bio',
        'hobby',
        'user_id'
    ];

    public function users(){
        return $this->belongsTo('App\User');
    }
}
