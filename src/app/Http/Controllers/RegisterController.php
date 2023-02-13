<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Profile;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function form() {
        return view('auth.register-form');
    }

    public function store(Request $request) 
    {
        $requestData = $request->validate([
            'name' => '',
            'surname' => '',
            'birthday' => '',
            'gender' => 'required',
            'photo' => 'mimes:jpg,jpeg,png|max:3072',
            'email' => 'required|email|unique:users,email',
            'login' => 'required|unique:users,login',
            'password' => 'required',
        ]);

        // Пароль
        $requestData['password'] = Hash::make($requestData['password']);

        // Фото
        if ($request->hasFile('photo')) {
            $fileName = $request->file('photo')->getClientOriginalName();
            $path = $request->file('photo')->storeAs('images', $fileName, 'public');
            $requestData["photo"] = '/src/storage/app/public/' . $path;
        };

        // Создание аккаунта
        $user = User::create($requestData);
        Auth::login($user);
        
        return redirect('/')->with('success', 'Вы успешно зарегистрировались!');
    }
}
