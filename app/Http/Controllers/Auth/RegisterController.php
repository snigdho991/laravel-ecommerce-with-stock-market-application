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
            'user_name'    => 'required|string|max:255',
            'user_email'   => 'required|string|email|max:255|unique:users,email',
            'user_pass'    => 'required|string|min:6|confirmed',
            'user_country' => 'required',
            'terms'        => 'required',
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
        $avatar = 'public/app/images/defaults/avatar/male-3.jpg';

        $user = User::create([
            'name'      => $data['user_name'],
            'email'     => $data['user_email'],
            'password'  => bcrypt($data['user_pass']),
            'country'   => $data['user_country'],
            'avatar'    => $avatar,
        ]);

        /*$user->billingshippingaddress()->save(new BillingShippingAddress());*/
        return $user;
    }
}
