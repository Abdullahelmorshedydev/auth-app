<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\RegisterRequest;

class RegisterController extends Controller
{
    public function registration()
    {
        return view('admin.registration');
    }

    public function validate_registration(RegisterRequest $request)
    {
        User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => bcrypt($request['password'])
        ]);

        return redirect()->route('login')->with('success', 'Registration Completed, now you can login');
    }
}
