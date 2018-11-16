<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
  protected $redirectTo = '/';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware($this->guestMiddleware(), ['except' => 'logout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
		
		$type=$data['type'];
		if($type == 'student') {
			return Validator::make($data, [
            'name' => 'required|max:255',
			'email' => 'required|email|Regex:^([02])([0-9]){3}(0)([0-9]){4}@((ub)\.(ac)\.(bw))^|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);
		}
		 elseif($type == 'lecturer') {
		
			return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|Regex:^(?=.*[a-z])@((mopipi)\.(ub)\.(bw))^|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);
			
		}
		elseif($type == 'admin') {
		
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|Regex:^(adminpumas)([0-9]){2}@((mopipi)\.(ub)\.(bw))^|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);
		}
    }
    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
		
		$type=$data['type'];
		if($type == 'student') {
			$this->redirectTo ='/studentpage';
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
			'type'=> $data['type'],
        ]);
		}
	elseif($type == 'lecturer') {
		$this->redirectTo ='/lecturerpage';
		return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
			'type'=> $data['type'],
        ]);
	}
		elseif($type == 'admin') {
		$this->redirectTo ='/adminpage';
		return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
			'type'=> $data['type'],
        ]);
	}
    }
	
	protected function authenticated($request, $user)
    {
       $type = $user->type;

    if($type=='lecturer'){
        return redirect()->intended('/lecturerpage');
    }elseif($type=='student'){
        return redirect()->intended('/studentpage');
    }elseif($type=='admin'){
        return redirect()->intended('/adminpage');
    }
    }

}
