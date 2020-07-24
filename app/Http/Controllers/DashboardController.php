<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        if (Auth::user()->isAdmin) {
            return view('admin');
        } else {
            return view('operator');
        }
    }

    public function templates()
    {
        if (Auth::user()->isAdmin) {
            return view('templates');
        } else {
            return redirect('dashboard');
        }
    }
}
