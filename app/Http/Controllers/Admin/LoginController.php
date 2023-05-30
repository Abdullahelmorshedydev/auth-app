<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Admin\LoginRequest;

class LoginController extends Controller
{
    public function index()
    {
        return view('admin.login');
    }
    public function validate_login(LoginRequest $request)
    {
        $credentials = $request->only('email', 'password');

        if(Auth::attempt($credentials))
        {
            return redirect()->route('dashboard');
        }

        return redirect()->route('login')->with('success', 'Login details are not valid');
    }
    public function logout()
    {
        Auth::logout();

        return Redirect()->route('login');
    }
}
