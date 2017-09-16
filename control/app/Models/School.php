<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'school_name',
        'school_address',
        'state',
        'city',
        'is_active'
    ];

    public  function children (){
        return $this->hasMany('App\Models\Child');
    }

    public  function school_sessions (){
        return $this->hasMany('App\Models\SchoolSession');
    }

    public  function teachers (){
        return $this->hasMany('App\Models\Teacher');
    }
}
