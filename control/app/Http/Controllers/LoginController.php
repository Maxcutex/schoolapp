<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Adldap\Laravel\Facades\Adldap;
use App\User;
use Illuminate\Support\Facades\Log;
use Sentinel;
use Cartalyst\Sentinel\Checkpoints\ThrottlingException;
use Cartalyst\Sentinel\Checkpoints\NotActivatedException;
use Artisaninweb\SoapWrapper\SoapWrapper;
use App\soap\nusoap_client;



class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    use AuthenticatesUsers;

    public function username()
    {
        return 'username';
    }




    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(SoapWrapper $soapWrapper)
    {
        $this->middleware('guest', ['except' => 'logout']);
        $this->soapWrapper = $soapWrapper;
    }
    public function index()
    {
        return view('ldap.login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function lockScreen()
    {
        return view('ldap.lockscreen');
    }

    public function unlock(Request $request)
    {


        $password = $request->password;
        $this->validate($request, [
            'password' => 'required',
        ]);
        $loginUsername = strtolower($request->username);
        if($loginUsername == 'admin' || $loginUsername == 'administrator' || $loginUsername == 'admin2'){
            //dd('Me');
            if(\Hash::check($password, Sentinel::getUser()->password)){

                return redirect()->intended('/dashboard');
            }
            return back()->withErrors('Password does not match. Please try again.');
        }else{
            if (Adldap::auth()->attempt($request->username, $request->password)) {
                return redirect()->intended('/dashboard');
            }
            return back()->withErrors('Password does not match. Please try again.');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    public function postLogin(Request $request){
        $this->validate($request,[
            'username' => 'required',
            'password' =>  'required'
        ]);
        //dd($request->all());
        $loginUsername = strtolower($request->username);
        if($loginUsername == 'admin' || $loginUsername == 'administrator' || $loginUsername == 'admin2'){
            return $this->adminLogin($request);
        }else{
            return $this->ADlogin($request);
        }


    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Adldap::auth()->logout();
    }

    public function logout()
    {
        Sentinel::logout();
        return redirect('/userLogin');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */


    private function adminLogin(Request $request)
    {
        try {
            //if (Sentinel::authenticate($request->all())) {
            if ($user= Sentinel::authenticate([
                'username'    => $request->username,
                'password' => $request->password
                ])
            ) {
                $slug = Sentinel::getUser()->roles()->first()->slug;
                if($slug == 'admin' || $slug == 'admin2' ){
                    return redirect()->intended('/dashboard');
                }else{
                    return redirect()->back()->withErrors('Invalid role');
                }
            }else{
                return redirect()
                    ->back()
                    ->with([
                        'fail' => 'Login Failed, please confirm Credentials'
                    ]);
            }
        } catch (ThrottlingException $e){
            $delay = $e->getDelay();
            return redirect()
                ->back()
                ->with([
                    'fail' => "You have entered invalid credentials numerous times, you account has been suspended for $delay"
                ]);
        } catch (NotActivatedException $e){
            $message = $e->getMessage();
            return redirect()->back()->with(['fail' => $message]);
        }
        catch (\Exception $e){
            $message = $e->getMessage();
            Log::info($message);
            return redirect()->back()->with(['fail' => 'Login Failed']);
        }
    }



}
