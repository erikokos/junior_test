<?php

namespace App\Http\Controllers\Auth;

use App\Entities\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
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
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function register(Request $request)
    {

        $this->validator($request->all())->validate();
        //event(new Registered($user = $this->create($request->all())));


        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');
        $secret_phrase = $request->input('secret_phrase');
        $objUser = $this->create([
            'name' => $name,
            'email' => $email,
            'password' => $password,
            'secret_phrase' => $secret_phrase
        ]);
        if(!($objUser instanceof User)) {
            return back()->with('error', 'ERROR!!!!!');
        }
        $this->guard()->login($objUser);

        return redirect(route('account'))->with('success', 'Congratulation!');

        /*return $this->registered($request, $user)
            ?: redirect($this->redirectPath());*/
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
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'secret_phrase' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Entities\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'secret_phrase' => $data['secret_phrase']
        ]);
    }
}
