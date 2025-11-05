<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
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
    protected $redirectTo = '/home'; // or '/dashboard'

// Make sure your validator and create methods include all custom fields:
protected function validator(array $data)
{
    return Validator::make($data, [
        'student_id' => ['required', 'string', 'max:255', 'unique:users'],
        'name' => ['required', 'string', 'max:255'],
        'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        'age' => ['required', 'integer', 'min:1', 'max:150'],
        'average' => ['required', 'numeric', 'min:0', 'max:100'],
        'department' => ['required', 'string', 'max:255'],
        'program' => ['required', 'string', 'max:255'],
        'password' => ['required', 'string', 'min:8', 'confirmed'],
    ]);
}

protected function create(array $data)
{
    return User::create([
        'student_id' => $data['student_id'],
        'name' => $data['name'],
        'email' => $data['email'],
        'age' => $data['age'],
        'average' => $data['average'],
        'department' => $data['department'],
        'program' => $data['program'],
        'password' => Hash::make($data['password']),
    ]);
}
}