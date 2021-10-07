<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;
class LoginController extends Controller
{
    public function getUserLogin()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|max:50',
            'password' => 'required|min:6|max:50'
        ]);
        $remember_me = $request->has('remember_me') ? true : false;

        if (Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')],$remember_me)) {
            return redirect(route('dashboard'));
        }
        if (Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')],$remember_me)) {

            return redirect()->back()->with(['error' => 'Your Account Not Active']);
        }
        return redirect()->back()->with(['error' => 'Error Username Or Password']);
    }

    public function logout()
    {
        if (Auth::check()) {
            Auth::logout();
            return redirect()->route('login');
        } else {
            return redirect()->route('login');
        }

    }
}
