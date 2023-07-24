<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('components.register');
    }

    public function action(RegisterRequest $request)
    {
        $data = $request->validated();
        $data['password'] = Hash::make($data['password']); //шифруем пароль с помощью метода make, класса Hash.
        User::create($data);
        return redirect()->route('login.index');
    }


}
