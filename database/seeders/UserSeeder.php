<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        
        User::create([
            'name' => 'Ahmed Admin',
            'email' => 'admin@bookbus.com',
            'password' => Hash::make('password123'),
            'role' => 'admin',
        ]);

        
        User::create([
            'name' => 'Ahmed Client',
            'email' => 'ahmed@test.com',
            'password' => Hash::make('password123'),
            'role' => 'client',
        ]);
    }
}