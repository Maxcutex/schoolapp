<?php

namespace App\Http\Controllers;

use App\Helpers\ActivationClass;
use Illuminate\Http\Request;
use App\Models\User;

class ActivationController extends Controller
{
    public function activate($email,$activationCode){
        $user = User::whereEmail($email)->firstOrFail();
        $activate = new ActivationClass($user);
        if ($activate->complete($activationCode)){
            return redirect('/userLogin')->with(['success' => 'Your account has been activated, you can login below']);
        }else{

        }
    }


}
