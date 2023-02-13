<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Show the form to login.
     * 
     * @return Illuminate/View/View 
     * */

    public function form()
    {
        return view('auth.login-form');
    }


    /** 
     * Validate and authenticate the user.
     * 
     * @param Illuminate/HTTP/Request $request
     * @return Illuminate/HTTP/Response
     */
    public function authenticate(Request $request)
    {

        $requestData = $request->validate([
            'login' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt($requestData)) {
            $request->session()->regenerate();
            return redirect('/')->with('success', 'Вы успешно авторизовались!');
        }

        return back()->with('fail', 'Указан неверный логин или пароль.');
    }
}
