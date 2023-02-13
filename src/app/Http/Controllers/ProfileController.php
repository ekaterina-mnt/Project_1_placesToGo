<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    public function show()
    {
        $user = Auth::user();
        return view('profile.show', ['user' => $user]);
    }

    public function edit()
    {
        $user = Auth::user();
        return view('profile.edit-form', ['user' => $user]);
    }

    public function update(Request $request)
    {
        $user = Auth::user();

        $requestData = $request->validate([
            'name' => '',
            'surname' => '',
            'birthday' => '',
            'gender' => 'required',
            'photo' => 'mimes:jpg,jpeg,png|max:3072',
        ]);

        if ($request->hasFile('photo')) {
                $fileName = $request->file('photo')->getClientOriginalName();
                $path = $request->file('photo')->storeAs('images', $fileName, 'public');
                $requestData["photo"] = '/storage/app/public/' . $path;
                DB::table('users')
                ->where('id', $user->id)
                ->update(['photo' => $requestData["photo"]]);
        }

        DB::table('users')
            ->where('id', $user->id)
            ->update([
                'name' => $requestData['name'],
                'surname' => $requestData['surname'],
                'birthday' => $requestData['birthday'],
                'gender' => $requestData['gender'],
            ]);

        // Сохранение изменений

        return redirect('/profile')->with('success', 'Вы успешно изменили данные профиля!');
    }
}
