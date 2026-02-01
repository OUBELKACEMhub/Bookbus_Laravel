<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

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
        'password' => 'password123',
        'role' => 'client'
    ]);
    }
}
