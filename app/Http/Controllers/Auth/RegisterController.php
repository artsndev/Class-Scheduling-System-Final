<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Providers\RouteServiceProvider;
use RealRashid\SweetAlert\Facades\Alert;
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
    protected $redirectTo = '/admin/home';

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
            'firstname' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'middlename' => ['required', 'string', 'max:255'],
            'studentId' => ['required', 'string', 'max:255'],
            'major'=> ['required', 'string', 'max:255'],
            'age'=> ['required', 'string', 'max:255'],
            'semester'=>['required', 'string', 'max:255'],
            'curriculum_year'=>['required', 'string', 'max:255'],
            'student_type'=>['required', 'string', 'max:255'],
            'student_status'=>['required', 'string', 'max:255'],
            'section'=>['required', 'string', 'max:255'],
            'civil_status'=>['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'address' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:15'],
            'birth_date' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            //'password-confirm' => ['required', 'string', 'min:8', 'same:password'],
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
        $user = User::create([
            'firstname' => $data['firstname'],
            'lastname' => $data['lastname'],
            'middlename' => $data['middlename'],
            'major' => $data['major'],
            'semester' => $data['semester'],
            'curriculum_year' => $data['curriculum_year'],
            'student_type' => $data['student_type'],
            'student_status' => $data['student_status'],
            'section' => $data['section'],
            'civil_status' => $data['civil_status'],
            'age' => $data['age'],
            'email' => $data['email'],
            'studentId' => $data['studentId'],
            'address' => $data['address'],
            'gender' => $data['gender'],
            'phone' => $data['phone'],
            'birth_date' =>  $data['birth_date'],
            'password' => Hash::make($data['password']),
        ]);
        // dd($user);
        Alert::toast('You\'ve Successfully Registered!', 'success');
        return $user;
    }
}
