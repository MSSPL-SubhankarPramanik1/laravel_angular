<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Employee;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

use Illuminate\Contracts\Auth\Guard;
use App\Http\Requests\Auth\LoginRequest; 
use App\Http\Requests\Auth\RegisterRequest;

class AuthController extends Controller
{

    /**
     * User model instance
     * @var User
     */
    protected $user; 
    
    /**
     * For Guard
     *
     * @var Authenticator
     */
    protected $auth;

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct(Guard $auth, User $user)
    {
        $this->user = $user; 
        $this->auth = $auth;
        $this->middleware('guest', ['except' => 'getLogout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    /*protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
        ]);
    }*/

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }

    /* Login get post methods */
    protected function getLogin() {
        return View('users.login');
    }

    protected function postLogin(LoginRequest $request) {
        if ($this->auth->attempt($request->only('email', 'password'))) {       
            $user = $this->auth->user();
            /*'<pre>';
            print_r($user);
            '</pre>';
            die('SP');*/
            $redirect = ($user->role == 'A') ? 'employees' : 'dashboard';               
            return redirect()->route($redirect)->with('name', $user->email);
        }
 
        return redirect('laravel_angular/users/login')->withErrors([
            'email' => 'The email or the password is invalid. Please try again.',
        ]);
    }

    /* Register get post methods */
    protected function getRegister() {
        return View('users.register');
    }

    protected function postRegister(RegisterRequest $request) {
        //$this->user->name = $request->name;
        $this->user->email = $request->email;
        $this->user->password = bcrypt($request->password);
        $this->user->is_admin = 0;
        $this->user->role = 'E';
        $this->user->save();
        //return redirect('laravel_angular/users/login');

        if ($this->auth->attempt($request->only('email', 'password'))) {
            $user = $this->auth->user();
            $employee = new Employee;
            $employee->name = $request->name;
            $employee->email = $request->email;
            //$employee->contact_number = $request->contact_number;
            //$employee->position = $request->position;
            $employee->user_id = $user->id;
            $employee->save();

            return redirect()->route('dashboard')->with('name', $request->name);
        }
    }

    /**
     * Log the user out of the application.
     *
     * @return Response
     */
    protected function getLogout()
    {
        $this->auth->logout();
        return redirect('laravel_angular/users/login');
    }
}