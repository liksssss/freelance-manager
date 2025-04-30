<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => bcrypt('admin123'),
            'role' => 'admin',
        ]);

        User::create([
            'name' => 'Freelance User',
            'email' => 'freelance@example.com',
            'password' => bcrypt('freelance123'),
            'role' => 'freelance',
        ]);

        User::create([
            'name' => 'Client User',
            'email' => 'client@example.com',
            'password' => bcrypt('client123'),
            'role' => 'client',
        ]);
    }
}