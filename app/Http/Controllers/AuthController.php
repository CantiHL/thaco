<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index(Request $request)
    {
        return view("login");
    }
    public function login(Request $request)
    {
        // dd($request->input());
        Auth::attempt($request->only("email", "password"));
        if (Auth::check()) {
            return redirect(route('dashboard'));
        } else {
            return back();
        }
    }
    public function logout(Request $request)
    {
        // dd(auth()->check());
        Auth::logout();
        $request->session()->regenerate();
        return redirect(route('login'));
    }
}
