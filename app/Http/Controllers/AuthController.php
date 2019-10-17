<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Http\Requests\Auth\LoginRequest;

class AuthController extends Controller
{
    use AuthenticatesUsers;

    public function getLoginForm()
    {
        return view('auth/login');
    }

    public function login(LoginRequest $request)
    {
        if ($this->attemptLogin($request)) {
            return redirect()->route('users.index');
        }

        return redirect()->route('auth.login');
    }
}
