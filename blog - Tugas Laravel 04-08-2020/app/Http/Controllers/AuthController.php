<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    function Register()
    {
        return view('register');
    }

    function Greeting( Request $request )
    {
    	$nama = $request['name'];
    	$nama2 = $request ['name2'];
        return view('greeting' , ['name'=>$nama , 'name2' =>$nama2]);
    }
}
