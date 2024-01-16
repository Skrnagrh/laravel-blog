<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Menambahkan user admin
        User::create([
            'name' => 'Sukron Anugrah',
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('password'),
            'is_admin' => 1
        ]);

        for ($i = 1; $i <= 4; $i++) {
            User::create([
                'name' => 'User ' . $i,
                'username' => 'user' . $i,
                'email' => 'user' . $i . '@example.com',
                'password' => bcrypt('password')
            ]);
        }
    }
}
