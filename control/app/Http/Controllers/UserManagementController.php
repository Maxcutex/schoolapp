<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\User;
use Illuminate\Support\Facades\Log;
use Mail;
use App\Mail\Activate;
Use Setinel;


class UserManagementController extends Controller
{
       /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/user-management';

         /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       // $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::paginate(5);

        return view('backend/users-mgmt/index', ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend/users-mgmt/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        try{
            $this->validateInput($request);
            $user = User::create([
                'username' => $request['username'],
                'email' => $request['email'],
                'password' => bcrypt($request['password']),
                'first_name' => $request['firstname'],
                'last_name' => $request['lastname'],
                'dob' => $request['dob']
            ]);

            $sentinelUser = Sentinel::findById($user->id);
            $activation = Activation::create($sentinelUser);
            $this->sendMail($sentinelUser, $activation->code);
            dd($request->all());
        }catch (\Exception $e){
            Log::info($e->getMessage());
            return redirect()->back()->withErrors('User creation failed');
        }


        return redirect()->intended('backend/user-management');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        // Redirect to user list if updating user wasn't existed
        if ($user == null || count($user) == 0) {
            return redirect()->intended('/backend/user-management');
        }

        return view('backend/users-mgmt/edit', ['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //dd($request->all());
        $user = User::findOrFail($id);
        $constraints = [
            'user_name' => 'required|max:20',
            'first_name'=> 'required|max:60',
            'last_name' => 'required|max:60',
            'dob' => 'required'
            ];
        $input = [
            'user_name' => $request['username'],
            'first_name' => $request['firstname'],
            'last_name' => $request['lastname'],
            'dob' => $request['dob']

        ];
        if ($request['password'] != null && strlen($request['password']) > 0) {
            $constraints['password'] = 'required|min:6|confirmed';
            $input['password'] =  bcrypt($request['password']);
        }
        $this->validate($request, $constraints);
        User::where('id', $id)
            ->update($input);
        
        return redirect()->intended('/backend/user-management');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::where('id', $id)->delete();
         return redirect()->intended('/backend/user-management');
    }

    /**
     * Search user from database base on some specific constraints
     *
     * @param  \Illuminate\Http\Request  $request
     *  @return \Illuminate\Http\Response
     */
    public function search(Request $request) {
        $constraints = [
            'username' => $request['username'],
            'firstname' => $request['firstname'],
            'lastname' => $request['lastname'],
            'department' => $request['department']
            ];

       $users = $this->doSearchingQuery($constraints);
       return view('backend/users-mgmt/index', ['users' => $users, 'searchingVals' => $constraints]);
    }

    private function doSearchingQuery($constraints) {
        $query = User::query();
        $fields = array_keys($constraints);
        $index = 0;
        foreach ($constraints as $constraint) {
            if ($constraint != null) {
                $query = $query->where( $fields[$index], 'like', '%'.$constraint.'%');
            }

            $index++;
        }
        return $query->paginate(5);
    }
    private function validateInput($request) {
        $this->validate($request, [
            'username' => 'required|max:20',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
            'first_name' => 'required|max:60',
            'last_name' => 'required|max:60'
        ]);
    }
    protected function sendMail($user, $code)
    {
        $activate = new  Activate($user, $code);
        Mail::to($user->email)->send($activate);

        // Mail::to($event->user->email)->send(new NewUserWelcome($event->user));
    }
}
