<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function processLogin()
    {
        return view('auth.login');
    }

    public function processRegister()
    {
        return view('auth.register');
    }
}
