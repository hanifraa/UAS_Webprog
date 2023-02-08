<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
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
        return Validator::make($data, [
            'first_name' => ['required', 'string', 'max:25'],
            'last_name' => ['required', 'string', 'max:25'],
            'gender_id' => ['required'],
            'display_picture_link' => ['required', 'mimes:jpg,png,jpeg'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:accounts'],
            'password' => ['required', 'confirmed', 'string', 'min:8', 'confirmed', 'regex:/[0-9]/'],

        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {

        $file = $data['display_picture_link'];

        $fileName = $file->getClientOriginalName();

        $fileStoredName = $data['first_name'] . '-' . $data['last_name'] . '-' . $fileName;
        $file->move('Display Picture', $fileStoredName);

        return User::create([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'role_id' => 2,
            'gender_id' => $data['gender_id'],
            'display_picture_link' =>  $fileStoredName,
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
