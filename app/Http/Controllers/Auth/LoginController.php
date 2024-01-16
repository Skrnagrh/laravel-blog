<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
     return view('auth.login', [
         'title' => 'Login',
         'active' => 'login'
     ]);
    }

    public function authenticate(Request $request)
    {
          $credentials = $request->validate([
             'email' => 'required|email:dns',
             'password' => 'required'
         ]);
         if (Auth::attempt($credentials)) {
             $request->session()->regenerate();
             return redirect()->intended('/dashboard');
         }

         return back()->with('loginError', 'Login Failed!');
    }

    public function logout(Request $request)
    {
     Auth::logout();
     $request->session()->invalidate();
     $request->session()->regenerate();
     return redirect('/');
    }

 }
