<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Timeline extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'activity_id',
        'child_id',
        'activity_description',
        'activity_image',
        'activity_loom'
    ];


    public  function activities (){
        return $this->belongsTo('App\Models\Activity');
    }

    public function children (){
        return $this->belongsToMany('App\Models\Timeline');
    }

}
