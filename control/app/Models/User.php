<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;


class User extends Authenticatable
{
    use Notifiable;

    use SoftDeletes;
    
    /**
    * The attributes that aren't mass assignable.
    *
    * @var array
    */
    protected static $activationsModel = 'App\Models\Activation';
    protected $guarded = ['remember_token'];

    protected $fillable = [
        'email',
        'password',
        'last_name',
        'first_name',
        'username',
        'dob',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function guardian (){
        return $this->hasOne('App\Models\Guardian');
    }

    public function activations()
    {
        return $this->hasMany(static::$activationsModel, 'user_id');
    }


}
