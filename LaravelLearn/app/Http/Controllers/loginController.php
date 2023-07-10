<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;

class loginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function handleLogin(LoginRequest $request)
    {
        // $request->validate(
        //     [
        //         'name.required' => 'The name is required',
        //         'name.alpha' => 'Name with numbers is not allowed',
        //         'email.email' => 'Email must be an email'
        //     ]
        // );

        return $request;
    }
}
