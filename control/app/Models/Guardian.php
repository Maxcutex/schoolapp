<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Guardian extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'date_added',

    ];

    public function user (){
        return $this->hasOne('App\Models\User','user_id');
    }

    public function children (){
        return $this->hasMany('App\Models\Child');
    }

}
