<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Teacher extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'email',
        'last_name',
        'first_name',
        'current_class',
        'school_id',


    ];


    public function school (){
        return $this->belongsTo('App\Models\School','school_id');
    }
}
