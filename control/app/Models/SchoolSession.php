<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SchoolSession extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'session_year',
        'is_active',
        'is_active'
    ];

    public function school (){
        return $this->belongsTo('App\Models\School','school_id');
    }
}
