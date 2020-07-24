<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        if (Auth::user() == null) {
            return view('login');
        } else {
            return redirect()->route('dashboard');
        }
    }

    public function login(LoginRequest $request)
    {
        $creadentials = $request->only('login','password');

        if (Auth::attempt($creadentials,$request->remember)) {
            return redirect()->intended('dashboard');
        } else {
            return redirect()->back()->withInput()->with('message', 'Неверный логин или пароль');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
