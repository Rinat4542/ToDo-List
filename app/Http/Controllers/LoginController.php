<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('components.login');
    }

    public function action(Request $request)
    {
        Auth::attempt([
            'email'=>$request->input('email'),
            'password'=>$request->input('password')
        ], true);//флаг true добавляет remember token

        return redirect()->route('tasks.show');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login.index');
    }
}
