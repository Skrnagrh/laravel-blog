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

            'about' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'company' => 'PT. Andromind',
            'job' => 'Web Developer',
            'country' => 'Indonesia',
            'address' => 'Jalan 123 AMD',
            'phone' => '+62 123-456-7890',
            'email' => 'skrnagrh@gmail.com',
            'twitter' => 'skrnagrh',
            'facebook' => 'skrnagrh',
            'instagram' => 'skrnagrh',
            'linkedin' => 'sukron',
            'is_admin' => 1
        ]);

        for ($i = 1; $i <= 4; $i++) {
            User::create([
                'name' => 'User ' . $i,
                'username' => 'user' . $i,
                'email' => 'user' . $i . '@gmail.com',
                'password' => bcrypt('password')
            ]);
        }
    }
}
