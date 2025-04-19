<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        if (!User::where('email', 'user@gmail.com')->exists()) {
            User::create([
                'name' => 'User',
                'email' => 'user@gmail.com',
                'password' => Hash::make('12345'),
                'role' => 'user',
            ]);
        }
    
        if (!User::where('email', 'admin@gmail.com')->exists()) {
            User::create([
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('12345'),
                'role' => 'admin',
            ]);
        }
    }
}