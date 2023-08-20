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
        User::factory(5)->create();
        User::create(
            [
                'name' => 'Ferdian Husnal Maruf',
                'email' => 'frdnhmrf@mail.com',
                'email_verified_at' => now(),
                'password' => Hash::make('Rahasia123'),
            ]
        );
    }
}
