<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 16/09/2017
 * Time: 14:21
 */
namespace App\Helpers;
use App\Models\Activation;

class ActivationClass
{
    protected $expires = 259200;

    protected  $user;

    public function __construct($user)
    {
        $this->user = $user;
    }

    public function create()
    {
        $activation = new Activation;

        $code = $this->generateActivationCode();

        $activation->fill(compact('code'));

        $activation->user_id = $this->user->id;

        $activation->save();

        return $activation;
    }

    public function complete($code)
    {
        $expires = $this->expires();

        $activation = Activation::where('user_id', $this->user->id)
            ->where('code', $code)
            ->where('completed', false)
            ->where('created_at', '>', $expires)
            ->first();

        if ($activation === null) {
            return false;
        }

        $activation->fill([
            'completed'    => true,
            'completed_at' => Carbon::now(),
        ]);

        $activation->save();

        return true;
    }

    public function completed()
    {
        $activation = Activation::where('user_id', $this->user->id)
            ->where('completed', true)
            ->first();

        return $activation ?: false;
    }

    public function removeExpired()
    {
        $expires = $this->expires();

        return Activation::where('completed', false)
            ->where('created_at', '<', $expires)
            ->delete();
    }


    protected function expires()
    {
        return Carbon::now()->subSeconds($this->expires);
    }

    /**
     * Return a random string for an activation code.
     *
     * @return string
     */
    protected function generateActivationCode()
    {
        return str_random(32);
    }
}