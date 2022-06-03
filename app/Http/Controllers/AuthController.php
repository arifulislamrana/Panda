<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function signUpGet()
    {
        return view('registration');
    }

    public function loginGet()
    {
        return view('login');
    }
}
