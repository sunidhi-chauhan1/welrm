<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserAuthController extends Controller
{
    public function signup(Request $request)
    {

        $request->validate([

            'fullName'     => 'required|string|max:255',
            'mobile'       => 'required|string|max:255',
            'email'        => 'required|string|email|unique:users|max:255',
            'password'     => 'required|string|min:8|confirmed',

        ]);

        $users =  User::create([

            'fullName' => $request->fullName,
            'mobile'   => $request->mobile,
            'email'    => $request->email,
            'password' => Hash::make($request->password),
            'createdAt' => now(),
            'updatedAt' => now()
        ]);

        session()->put('signup', "success");

        return redirect()->route('index')->with('success', 'Registration successful. You can now log in.');
    }

    public function login(Request $request)
    {

        $request->validate([

            'email'    => 'required|email',
            'password' => 'required',

        ]);

        $credentials = $request->only('email', 'password');


        if (Auth::attempt($credentials)) {

            $request->session()->regenerate();

            session()->forget(['signup', 'login-error']);

            return redirect()->route('index')->with('success', "Logged in successfully. ");
        } else {
            session()->put('login-error', 'error');
        }
        return back()->with('error', 'Invalid credentials.');
    }
}
