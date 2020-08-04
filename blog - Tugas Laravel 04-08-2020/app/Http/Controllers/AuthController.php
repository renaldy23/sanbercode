<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    function Register()
    {
        return view('register');
    }

    function Greeting()
    {
        return view('greeting');
    }
}
