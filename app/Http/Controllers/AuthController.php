<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function __construct()
    {

    }
    public function signUpGet()
    {
        return view('registration');
    }

    public function signUpPost(Request $request)
    {
       $validatedData = $request->validate([
        'email' => 'required|email|unique:users',
        'password' => 'required|min:5',
        'cpassword' => 'required|min:5'
         ], [
        'email.required' => 'Email is required',
        'password.required' => 'Password is required'
         ]);

        $validatedData['password'] = bcrypt($validatedData['password']);

        $doesExist = User::where('email', $validatedData['email'])->get();
        if (count($doesExist) > 0)
        {
            return redirect()->back()
        	->withErrors(['invalid' => 'The email is already exist.'])
        	->withInput($request->only('email', 'remember'));

        }
        $user = User::create($validatedData);

        Auth::login($user);

        return redirect()->route('home');
    }

    public function loginGet()
    {
        return view('login');
    }

    public function logout(Request $request)
	{
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
	}

}
