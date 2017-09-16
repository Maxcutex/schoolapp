<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Child extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'email',
        'password',
        'last_name',
        'first_name',
        'current_class',
        'dob',
        'child_code'
    ];

    public function guardian (){
        return $this->belongsTo('App\Models\Guardian','guardian_id');
    }

    public function school (){
        return $this->belongsTo('App\Models\School','school_id');
    }


    public function timelines (){
        return $this->belongsToMany('App\Models\Timeline');
    }



}
