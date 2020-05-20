<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

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
    protected $redirectTo = RouteServiceProvider::HOME;

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
        Log::debug('in validator name = '.$data['name']);
        Log::debug('in validator email = '.$data['email']);
        Log::debug('in validator password = '.$data['password']);
        Log::debug('in validator dob = '.$data['dob']);
        Log::debug('in validator address1 = '.$data['address1']);
        Log::debug('in validator phone = '.$data['phone']);
        Log::debug('in validator user_type = '.$data['user_type']);
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'dob'=> ['required'],
            'phone'=> ['required','string','min:10'],
            'address1'=> ['required','string'],
            'city'=> ['required','string'],
            'state'=> ['required','string'],
            'pin'=> ['required','string'],
            'user_type'=> ['required','string']
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        Log::debug('in create name = '.$data['name']);
        Log::debug('in create email = '.$data['email']);
        Log::debug('in create password = '.$data['password']);
        Log::debug('in create dob = '.$data['dob']);
        Log::debug('in create address1 = '.$data['address1']);
        Log::debug('in create city = '.$data['city']);
        Log::debug('in create state = '.$data['state']);
        Log::debug('in create pin = '.$data['pin']);
        Log::debug('in create phone = '.$data['phone']);
        Log::debug('in create user_type = '.$data['user_type']);
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'dob' => $data['dob'],
            'address1' => $data['address1'],
            'address2' => $data['address2'],
            'city' => $data['city'],
            'state' => $data['state'],
            'pin' => $data['pin'],
            'phone' => $data['phone'],
            'user_type' => $data['user_type'],
        ]);
    }
}
