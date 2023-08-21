<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory(20)->create();
        User::create(
            [
                'name' => 'Ferdian Husnal Maruf',
                'email' => 'frdnhmrf@mail.com',
                'email_verified_at' => now(),
                'role' => 'admin',
                'phone' =>  '081234567890',
                'bio' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.',
                'password' => Hash::make('Rahasia123'),
            ]
        );
        User::create(
            [
                'name' => 'Super Admin',
                'email' => 'superadmin@gmail.com',
                'email_verified_at' => now(),
                'role' => 'superadmin',
                'phone' =>  '081329737706',
                'bio' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.',
                'password' => Hash::make('Superadmin123'),
            ]
        );
    }
}
