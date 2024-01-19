<?php

namespace Database\Seeders;

use App\Models\Profile;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProfilesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Mengisi satu profil dengan user_id 1
        Profile::create([
            'user_id' => 1,
            'name' => 'Sukron Anugrah',
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
        ]);
    }
}
