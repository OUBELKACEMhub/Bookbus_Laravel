<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
   public function run(): void
{
 
    \App\Models\User::create([
        'username' => 'ahmed',
        'email' => 'ahmed78@test.com',
        'password' => Hash::make('password123'), 
        'role' => 'client'
    ]);

    \App\Models\User::create([
        'username' => 'admin_user',
        'email' => 'admin@bookbus.com',
        'password' => Hash::make('admin_pass'),
        'role' => 'admin'
    ]);

    \App\Models\User::create([
        'username' => 'fatima',
        'email' => 'fatima@test.com',
        'password' => Hash::make('password123'),
        'role' => 'client'
    ]);
}
}
