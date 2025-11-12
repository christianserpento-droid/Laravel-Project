<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    /**
     * Redirect to welcome page after login
     */
    protected $redirectTo = '/dashboard';


    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
