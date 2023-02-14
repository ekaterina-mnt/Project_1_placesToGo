<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Екатерина',
            'surname' => 'Пензева',
            'birthday' => '2002-03-22',
            'gender' => 'female',
            'photo' => 'https://webmg.ru/wp-content/uploads/2023/01/10080-7.jpg',
            'email' => 'ekaterina@rambler.ru',
            'login' => 'ekaterina',
            'password' => Hash::make('123'),
        ]);
    }
}
