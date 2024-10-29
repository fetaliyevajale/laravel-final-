<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'email' => 'fetaliyevajale@gmail.com',
            'password' => Hash::make('jale5952262'), 
        ]);
    }
}
