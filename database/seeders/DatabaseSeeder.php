<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Database\Seeders\PostsSeeder;
use Database\Seeders\UsersSeeder;
use Database\Seeders\RepliesSeeder;
use Database\Seeders\CommentsSeeder;
use Database\Seeders\ProfilesSeeder;
use Database\Seeders\CategoriesSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->call([
            UsersSeeder::class,
            CategoriesSeeder::class,
            PostsSeeder::class,
            CommentsSeeder::class,
            RepliesSeeder::class,
            ProfilesSeeder::class,
        ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // User::create([
        //     'name' => 'Sukron Anugrah',
        //     'username' => 'Sukron',
        //     'email' => 'sukron@gmail.com',
        //     'password' => bcrypt('12345678')
        // ]);

        // User::factory(5)->create();

        // Category::create([
        //     'name' => 'Web Programming',
        //     'slug' => 'web-programming'
        // ]);
        // Category::create([
        //     'name' => 'Design',
        //     'slug' => 'design'
        // ]);
        // Category::create([
        //     'name' => 'Personal',
        //     'slug' => 'personal'
        // ]);

        // Post::Factory(20)->create();


    }
}

