<?php

namespace App\Http\Controllers\Auth;

use Auth;
use App\User;
use Validator;
use Request;
use Input;
use Response;
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
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
        ]);
    }

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

    /**
     * Login in get Method
     * [get]
     * @param email
     * @param password
     * @return redirect/json
     */
    public function getLogin(Request $request)
    {
        $credentials = Input::all();
        if (Auth::attempt($credentials))
            return redirect()->back();
        else
            return redirect()->back();
    }

    /**
     * Login in post Method
     * [post]
     * @param email
     * @param password
     * @return redirect/json
     */
    public function postLogin(Request $request)
    {
        $credentials = Input::all();
        if (Auth::attempt($credentials))
            return redirect()->back();
        else
            return redirect()->back();
    }

    /**
     * Log out in get Method
     * @return view/json
     */
    public function getLogout()
    {
        Auth::logout();
        return redirect()->back();
    }

    /**
     * Sign up in post method
     * [post]
     * @param name
     * @param email
     * @param password
     * @return view/json
     */
    public function signup()
    {
        $user = [
            'username' => 'wyl'
            'password' => '123'
            'email' => 'weyl1232179Q@garg'
        ];

        $user = Input::all();
        $validator = $this->validator($user);
        if ($validator->passes())
        {
            $this->create($user);
            return redirect('/');
        }
        else
            return Response::json(['reason' => $validator->message()]);
    }

    /**
     * get Current user info
     *
     * @return json
     */
    public function currentUser()
    {
       return Response::json(Auth::user());
    }

    public function changePassword()
    {
        //input :
        //          user_id
        //          oldPassWord
        //          newPassWord


        return redirect('home');
    }
}
