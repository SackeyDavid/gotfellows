<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
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
            'firstname' => 'required|max:255',
            'middlenames' => 'sometimes|max:100',
            'lastname' => 'required|max:100',
            'DOB' => 'required|max:300',
            'gender' => 'required|max:100',
            'country' => 'required|max:100',
            'telephone' => 'required|max:100',
            'email' => 'required|email|max:255|unique:users',
            'agree' => 'sometimes|max:100',
            'password' => 'required|min:6|confirmed',
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
            'firstname' => $data['firstname'],
            'middlenames' => $data['middlenames'],
            'lastname' => $data['lastname'],
            'DOB' => date('Y-m-d',strtotime($data['DOB'])),
            'gender' => $data['gender'],
            'country' => $data['country'],
            'telephone' => $data['telephone'],
            'email' => $data['email'],
            'agree' => $data['agree'],
            'password' => bcrypt($data['password']),
        ]);
    }
}
