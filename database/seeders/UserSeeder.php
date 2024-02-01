<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'nik' => '9827382738928372',
            'name' => 'Admin Aplikasi',
            'email' => 'admin@gmail.com',
            'telephone' => '081292837238',
            'password' => Hash::make('admin'),
            'level' => 'admin'
        ]);
        User::create([
            'nik' => '2938329289829189',
            'name' => 'User Aplikasi',
            'email' => 'user@gmail.com',
            'telephone' => '082763767827',
            'password' => Hash::make('user'),
            'level' => 'user'
        ]);
    }
}
